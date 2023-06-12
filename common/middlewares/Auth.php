<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    17/1/2023
 * @time    11:22 AM
 **/

namespace app\common\middlewares;

use app\common\abstracts\AuthAbstract;
use app\common\models\User;

/**
 * Class Auth.
 * This is common middleware for the backend app.
 */
class Auth extends AuthAbstract {

	/**
	 * @var User|null $user Instance of "\app\common\models\User" model
	 */
	public ?User $user = null;

	/**
	 * Auth constructor.
	 */
	public function __construct() {
		parent::__construct();
		if ($this->hasAuth()) {
			$this->user = User::findIdentity($this->getIdentity());
		}
	}

	/**
	 * Get "identity" session.
	 * Return false if this session not existed.
	 *
	 * @return bool
	 */
	public function hasAuth(): bool {
		return (bool) $this->getIdentity();
	}

	/**
	 * Get "identity" session.
	 *
	 * @return false|mixed
	 */
	public function getIdentity() {
		return $this->session->get('identity');
	}

	/**
	 * Validate before post.
	 *
	 * @return bool
	 */
	public function validateCsrf(): bool {
		if (!$this->verifyRequest()) {
			$this->session->setFlash('danger', 'Your request has been blocked by the security system.');
			return false;
		}
		return true;
	}
}
