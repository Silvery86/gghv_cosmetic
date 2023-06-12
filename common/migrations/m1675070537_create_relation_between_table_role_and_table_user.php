<?php

namespace app\common\migrations;

use app\common\lib\Database;

/**
 * Class m1675070537_create_relation_between_table_role_and_table_user.
 */
class m1675070537_create_relation_between_table_role_and_table_user {

	/**
	 * This method contains the logic to be executed when apply this migration.
	 *
	 * @return false|int
	 */
	public function up() {
		$db = new Database();
		return $db->pdo->exec("ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id_fk` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;");
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 *
	 * @return bool
	 */
	public function down(): bool {
		echo "m1675070537_create_relation_between_table_role_and_table_user cannot be reverted.\n";
		return false;
	}
}
