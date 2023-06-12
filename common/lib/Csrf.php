<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:31 AM
 **/

namespace app\common\lib;
/**
 * Class Csrf.
 * A simple CSRF class to protect forms against CSRF attacks.
 * This class uses PHP sessions for storage.
 */
class Csrf extends Session {

	/**
	 * @var string $_namespace The namespace for the session variable and form inputs
	 */
	private string $_namespace;

	/**
	 * Csrf constructor.
	 * Initializes the session variable name, starts the session if not already so, and initializes the token.
	 *
	 * @param string $namespace
	 */
	public function __construct(string $namespace = '_csrf') {
		parent::__construct();
		$this->_namespace = $namespace;
		$this->setToken();
	}

	/**
	 * Return the token from persistent storage.
	 *
	 * @return string
	 */
	public function getToken(): string {
		return $this->readTokenFromStorage();
	}

	/**
	 * Verify if supplied token matches the stored token.
	 *
	 * @param string $userToken
	 *
	 * @return boolean
	 */
	public function isTokenValid(string $userToken): bool {
		return ($userToken === $this->readTokenFromStorage());
	}

	/**
	 * Echoes the HTML input field with the token, and namespace as the name of the field.
	 */
	public function echoInputField() {
		$token = $this->getToken();
		echo "<input type=\"hidden\" name=\"$this->_namespace\" value=\"$token\" />";
	}

	/**
	 * Verifies whether the post token was set, else dies with error.
	 *
	 * @return bool
	 */
	public function verifyRequest(): bool {
		if (!isset($_POST[$this->_namespace])) {
			return false;
		}
		if (!$this->isTokenValid($_POST[$this->_namespace])) {
			return false;
		}
		return true;
	}

	/**
	 * Generates a new token value and stores it in persistent storage, or else does nothing if one already exists in persistent storage.
	 */
	private function setToken() {
		$storedToken = $this->readTokenFromStorage();
		if (empty($storedToken)) {
			$token = crypt(uniqid(rand(), true));
			$this->writeTokenToStorage($token);
		}
	}

	/**
	 * Reads token from persistent storage.
	 *
	 * @return string
	 */
	private function readTokenFromStorage(): string {
		return $this->get($this->_namespace) ?? '';
	}

	/**
	 * Writes token to persistent storage.
	 *
	 * @param $token
	 */
	private function writeTokenToStorage($token) {
		$this->set($this->_namespace, $token);
	}
}
