<?php

namespace app\common\migrations;

use app\common\lib\Database;

/**
 * Class m1673926826_create_table_user.
 */
class m1673926826_create_table_user {

	/**
	 * This method contains the logic to be executed when apply this migration.
	 *
	 * @return false|int
	 */
	public function up() {
		$db = new Database();
		return $db->pdo->exec("
CREATE TABLE IF NOT EXISTS `user` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `parent_id` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forgot_password_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint NOT NULL DEFAULT '0' COMMENT '0: inactive, 1: active, 2: blocked',
  `confirmed_at` int DEFAULT NULL,
  `last_login_at` int DEFAULT NULL,
  `blocked_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `user`
  ADD KEY `user_role_id_idx` (`role_id`),
  ADD KEY `user_parent_id_idx` (`parent_id`);
");
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 *
	 * @return bool
	 */
	public function down(): bool {
		echo "m1673926826_create_table_user cannot be reverted.\n";
		return false;
	}
}
