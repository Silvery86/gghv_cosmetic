<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:32 AM
 **/

namespace app\common\lib;
/**
 * Class Session.
 * This class performs any methods that affect the session.
 */
class Session {

	/**
	 * Session constructor.
	 */
	public function __construct() {
		if (php_sapi_name() === 'cli') {
			session_start();
		} else {
			if (session_status() !== PHP_SESSION_ACTIVE) {
				session_start();
			}
		}
	}

	/**
	 * Get a flash message if it has existed.
	 *
	 * @return mixed|null
	 */
	public static function getFlash() {
		return $_SESSION[''] ?? null;
	}

	/**
	 * Init a session.
	 *
	 * @param string $key
	 * @param mixed  $value
	 */
	public function set(string $key, $value) {
		$_SESSION[$key] = $value;
	}

	/**
	 * Get a session.
	 *
	 * @param string $key
	 *
	 * @return false|mixed
	 */
	public function get(string $key) {
		return $_SESSION[$key] ?? false;
	}

	/**
	 * Remove a session.
	 */
	public function remove(string $key) {
		unset($_SESSION[$key]);
	}

	/**
	 * Destroy session.
	 */
	public function destroy() {
		session_destroy();
	}

	/**
	 * Generate a simple flash message.
	 *
	 * @param string $key
	 * @param string $message
	 */
	public function setFlash(string $key, string $message) {
		$this->set('flash_message', [
			'key'     => $key,
			'message' => $message,
		]);
	}
}
