<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:55 AM
 **/

namespace app\common\helpers;

use app\common\lib\Smtp;

/**
 * Email helper.
 */
class EmailHelper {

	/**
	 * @var array $config Email configuration
	 */
	public array $config;

	/**
	 * EmailHelper constructor.
	 */
	public function __construct() {
		$this->config = include __DIR__ . '/../config/params.php';
	}

	/**
	 * Check if an email is on the white-list or not.
	 *
	 * @param string $email
	 *
	 * @return bool
	 */
	public static function isInWhiteList(string $email): bool {
		$whitelist = self::getEmailWhitelist();
		$suffix    = self::getEmailSuffix($email);
		if (!in_array($suffix, $whitelist)) {
			return false;
		}
		return true;
	}

	/**
	 * Returns the email suffix.
	 *
	 * @param string $email
	 *
	 * @return string
	 */
	public static function getEmailSuffix(string $email): string {
		$suffix = explode('@', $email);
		return '@' . $suffix[1];
	}

	/**
	 * Send an email.
	 *
	 * @param string $subject
	 * @param string $message
	 * @param string $recipient
	 * @param bool   $isHtml
	 * @param bool   $secure
	 * @param array  $attachments
	 *
	 * @return bool
	 */
	public static function send(string $subject, string $message, string $recipient, bool $isHtml = true, bool $secure = true, array $attachments = []): bool {
		$smtp = self::getSmtp();
		if (!empty($smtp)) {
			$mail = new Smtp($smtp['smtp_server'], $smtp['smtp_port']);
			if ($secure) {
				$mail->setProtocol(Smtp::TLS);
			}
			$mail->setLogin($smtp['smtp_username'], $smtp['smtp_password']);
			$mail->setFrom($smtp['smtp_sender_email'], $smtp['smtp_sender_name']);
			$mail->setSubject($subject);
			if ($isHtml) {
				$mail->setHtmlMessage($message);
			} else {
				$mail->setTextMessage($message);
			}
			$mail->addTo($recipient);
			if (!empty($attachments)) {
				foreach ($attachments as $attachment) {
					$mail->addAttachment($attachment);
				}
			}
			if (!$mail->send()) {
				echo 'An error has occurred. Please check the logs below:' . PHP_EOL;
				print_r($mail->getLogs());
				return false;
			}
		}
		return true;
	}

	/**
	 * Get email whitelist config.
	 *
	 * @return array|null
	 */
	private static function getEmailWhitelist(): ?array {
		$emailHelper = new self();
		return $emailHelper->config['common']['email_whitelist'];
	}

	/**
	 * Get SMTP config.
	 *
	 * @return array|null
	 */
	private static function getSmtp(): ?array {
		$emailHelper = new self();
		return $emailHelper->config['common']['smtp'];
	}
}
