<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    17/1/2023
 * @time    10:23 AM
 **/

namespace app\common\abstracts;

use app\common\lib\Security;
use app\common\lib\Session;

/**
 * Abstract class Auth.
 * This is abstract model for auth middlewares.
 */
abstract class AuthAbstract extends Security {

	/**
	 * @var Session $session Instance of the "app\common\lib\Session" class
	 */
	public Session $session;

	/**
	 * AuthAbstract constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->session = new Session();
	}

	/**
	 * Get "identity" session.
	 * Return false if this session not existed.
	 *
	 * @return bool
	 */
	abstract public function hasAuth(): bool;

	/**
	 * Get "identity" session.
	 */
	abstract public function getIdentity();
}
