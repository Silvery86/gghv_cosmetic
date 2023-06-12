<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    2/2/2023
 * @time    11:12 PM
 **/

namespace app\common\lib;
/**
 * Class Url.
 * This class handles methods that affected the URL.
 * E.g: redirect, goHome, goBack,...
 */
class Url {

	/**
	 * Redirect to a specific URL.
	 *
	 * @param string $url
	 */
	public static function redirect(string $url) {
		header('Location: ' . $url);
		exit();
	}

	/**
	 * Go back to home.
	 */
	public static function goHome() {
		self::redirect(self::getHomeUrl());
	}

	/**
	 * Go back to previous url.
	 */
	public static function goBack() {
		self::redirect(self::getPreviousUrl());
	}

	/**
	 * Get Home url.
	 *
	 * @return string
	 */
	public static function getHomeUrl(): string {
		return '/';
	}

	/**
	 * Get previous url.
	 *
	 * @return bool|mixed
	 */
	public static function getPreviousUrl() {
		return $_SERVER['HTTP_REFERER'] ?? true;
	}
}
