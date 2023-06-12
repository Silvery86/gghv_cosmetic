<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:55 AM
 **/

namespace app\common\helpers;

use DateTime;

/**
 * DateTime helper.
 */
class DateTimeHelper {

	/**
	 * Check the given timestamp is weekend or not.
	 *
	 * @param int|null $timestamp
	 *
	 * @return bool
	 */
	public static function isWeekend(?int $timestamp): bool {
		if (is_null($timestamp)) {
			$timestamp = time();
		}
		return (date('N', strtotime($timestamp)) >= 6);
	}

	/**
	 * Check if the given timestamp is today or not.
	 *
	 * @param $timestamp
	 *
	 * @return bool
	 */
	public static function isToday($timestamp): bool {
		$today     = new DateTime('today');
		$matchDate = DateTime::createFromFormat('Y-m-d', $timestamp);
		$matchDate->setTime(0, 0, 0);
		$diff     = $today->diff($matchDate);
		$diffDays = (int) $diff->format('%R%a');
		if ($diffDays === 0) {
			return true;
		}
		return false;
	}
}
