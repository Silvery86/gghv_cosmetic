<?php

namespace app\common\migrations;

use app\common\lib\Database;

/**
 * Class m1673926331_create_table_role.
 */
class m1673926331_create_table_role {

	/**
	 * This method contains the logic to be executed when apply this migration.
	 *
	 * @return false|int
	 */
	public function up() {
		$db = new Database();
		return $db->pdo->exec("
CREATE TABLE IF NOT EXISTS `role` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_backend_access` smallint NOT NULL DEFAULT '0' COMMENT '0: no, 1: yes',
  `status` smallint NOT NULL DEFAULT '1' COMMENT '0: inactive, 1: active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
");
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 *
	 * @return bool
	 */
	public function down(): bool {
		echo "m1673926331_create_table_role cannot be reverted.\n";
		return false;
	}
}
