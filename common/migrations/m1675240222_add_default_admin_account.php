<?php

namespace app\common\migrations;

use app\common\helpers\PasswordHelper;
use app\common\lib\Database;

/**
 * Class m1675240222_add_default_admin_account.
 */
class m1675240222_add_default_admin_account {

	/**
	 * This method contains the logic to be executed when apply this migration.
	 *
	 * @return false|int
	 */
	public function up() {
		$db            = new Database();
		$password_hash = PasswordHelper::hash('12345678');
		$auth_key      = PasswordHelper::generateRandomKey();
		$time          = time();
		return $db->pdo->exec("
INSERT INTO `user` (`role_id`, `parent_id`, `email`, `username`, `password_hash`, `auth_key`, `verification_token`, `forgot_password_token`, `registration_ip`, `status`, `confirmed_at`, `last_login_at`, `blocked_at`, `created_at`, `updated_at`) VALUES (1, NULL, 'pshop_adm@gmail.com', 'pshop_adm', '$password_hash', '$auth_key', NULL, NULL, '127.0.0.1', 1, $time, NULL, NULL, $time, $time);		
");
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 *
	 * @return bool
	 */
	public function down(): bool {
		echo "m1675240222_add_default_admin_account cannot be reverted.\n";
		return false;
	}
}
