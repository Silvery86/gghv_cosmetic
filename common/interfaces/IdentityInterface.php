<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    17/1/2023
 * @time    10:24 AM
 **/

namespace app\common\interfaces;
/**
 * Interface Identity.
 * This interface contains all default methods for identity.
 */
interface IdentityInterface {

	/**
	 * Finds an identity by the given ID.
	 *
	 * @param int $id
	 *
	 * @return mixed
	 */
	public static function findIdentity(int $id);

	/**
	 * Finds an identity by the given username.
	 *
	 * @param string $username
	 *
	 * @return mixed
	 */
	public static function findByUsername(string $username);

	/**
	 * Generate a hashed password.
	 *
	 * @param string $password
	 *
	 * @return string
	 */
	public static function generatePasswordHash(string $password): string;

	/**
	 * Validate a hashed password.
	 *
	 * @param string $password
	 * @param string $hash
	 *
	 * @return bool
	 */
	public static function validatePassword(string $password, string $hash): bool;
}
