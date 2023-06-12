<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    3:01 AM
 **/

namespace app\common\helpers;
/**
 * Network helper.
 */
class NetworkHelper {

	/**
	 * Get user real ip address.
	 *
	 * @return mixed|null
	 */
	public static function getRealIP() {
		$ip = $_SERVER['REMOTE_ADDR'] ?? null;
		if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
			$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
		} else {
			if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
		}
		return $ip;
	}

	/**
	 * Check an ip address is private or not.
	 *
	 * @param string $ip
	 *
	 * @return bool
	 */
	public static function isPrivateIP(string $ip): bool {
		if (!empty($ip)) {
			if (filter_var($ip, FILTER_VALIDATE_IP)) {
				if ($ip == '127.0.0.1' || $ip == '::1') {
					return true;
				}
			}
		}
		return false;
	}

	/**
	 * Get user's OS information.
	 *
	 * @param string $userAgent
	 *
	 * @return string
	 */
	public static function getUserSystemInfo(string $userAgent): string {
		$osPlatform = 'Unknown';
		$osArray    = [
			'/windows nt 10/i'      => 'Windows 10',
			'/windows nt 6.3/i'     => 'Windows 8.1',
			'/windows nt 6.2/i'     => 'Windows 8',
			'/windows nt 6.1/i'     => 'Windows 7',
			'/windows nt 6.0/i'     => 'Windows Vista',
			'/windows nt 5.2/i'     => 'Windows Server 2003/XP x64',
			'/windows nt 5.1/i'     => 'Windows XP',
			'/windows xp/i'         => 'Windows XP',
			'/windows nt 5.0/i'     => 'Windows 2000',
			'/windows me/i'         => 'Windows ME',
			'/win98/i'              => 'Windows 98',
			'/win95/i'              => 'Windows 95',
			'/win16/i'              => 'Windows 3.11',
			'/macintosh|mac os x/i' => 'Mac OS X',
			'/mac_powerpc/i'        => 'Mac OS 9',
			'/linux/i'              => 'Linux',
			'/ubuntu/i'             => 'Ubuntu',
			'/iphone/i'             => 'iPhone',
			'/ipod/i'               => 'iPod',
			'/ipad/i'               => 'iPad',
			'/android/i'            => 'Android',
			'/blackberry/i'         => 'BlackBerry',
			'/webos/i'              => 'Mobile',
		];
		foreach ($osArray as $regex => $value) {
			if (preg_match($regex, $userAgent) !== false) {
				$osPlatform = $value;
			}
		}
		return $osPlatform;
	}

	/**
	 * Get user's browser information.
	 *
	 * @param string $userAgent
	 *
	 * @return string
	 */
	public static function getUserBrowserInfo(string $userAgent): string {
		$browser      = 'Unknown';
		$browserArray = [
			'/msie/i'      => 'Internet Explorer',
			'/firefox/i'   => 'Firefox',
			'/safari/i'    => 'Safari',
			'/chrome/i'    => 'Chrome',
			'/edge/i'      => 'Edge',
			'/opera/i'     => 'Opera',
			'/netscape/i'  => 'Netscape',
			'/maxthon/i'   => 'Maxthon',
			'/konqueror/i' => 'Konqueror',
			'/mobile/i'    => 'Handheld Browser',
		];
		foreach ($browserArray as $regex => $value) {
			if (preg_match($regex, $userAgent) !== false) {
				$browser = $value;
			}
		}
		return $browser;
	}

	/**
	 * Get user's device information.
	 *
	 * @param string $userAgent
	 *
	 * @return string
	 */
	public static function getUserDeviceInfo(string $userAgent): string {
		$tabletBrowser = 0;
		$mobileBrowser = 0;
		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT'])) !== false) {
			$tabletBrowser ++;
		}
		if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT'])) !== false) {
			$mobileBrowser ++;
		}
		if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) || ((isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])))) {
			$mobileBrowser ++;
		}
		$mobileUa     = strtolower(substr($userAgent, 0, 4));
		$mobileAgents = [
			'w3c ',
			'acs-',
			'alav',
			'alca',
			'amoi',
			'audi',
			'avan',
			'benq',
			'bird',
			'blac',
			'blaz',
			'brew',
			'cell',
			'cldc',
			'cmd-',
			'dang',
			'doco',
			'eric',
			'hipt',
			'inno',
			'ipaq',
			'java',
			'jigs',
			'kddi',
			'keji',
			'leno',
			'lg-c',
			'lg-d',
			'lg-g',
			'lge-',
			'maui',
			'maxo',
			'midp',
			'mits',
			'mmef',
			'mobi',
			'mot-',
			'moto',
			'mwbp',
			'nec-',
			'newt',
			'noki',
			'palm',
			'pana',
			'pant',
			'phil',
			'play',
			'port',
			'prox',
			'qwap',
			'sage',
			'sams',
			'sany',
			'sch-',
			'sec-',
			'send',
			'seri',
			'sgh-',
			'shar',
			'sie-',
			'siem',
			'smal',
			'smar',
			'sony',
			'sph-',
			'symb',
			't-mo',
			'teli',
			'tim-',
			'tosh',
			'tsm-',
			'upg1',
			'upsi',
			'vk-v',
			'voda',
			'wap-',
			'wapa',
			'wapi',
			'wapp',
			'wapr',
			'webc',
			'winw',
			'winw',
			'xda ',
			'xda-',
		];
		if (in_array($mobileUa, $mobileAgents)) {
			$mobileBrowser ++;
		}
		if (strpos(strtolower($userAgent), 'opera mini') > 0) {
			$mobileBrowser ++;
			$stockUa = strtolower($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] ?? ($_SERVER['HTTP_DEVICE_STOCK_UA'] ?? ''));
			if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stockUa) !== false) {
				$tabletBrowser ++;
			}
		}
		if ($tabletBrowser > 0) {
			return 'Tablet';
		} else if ($mobileBrowser > 0) {
			return 'Mobile';
		} else {
			return 'Computer';
		}
	}
}
