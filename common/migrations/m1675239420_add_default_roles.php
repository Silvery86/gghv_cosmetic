<?php

namespace app\common\migrations;

use app\common\lib\Database;

/**
 * Class m1675239420_add_default_roles.
 */
class m1675239420_add_default_roles {

	/**
	 * This method contains the logic to be executed when apply this migration.
	 *
	 * @return false|int
	 */
	public function up() {
		$db = new Database();
		return $db->pdo->exec("
INSERT INTO `role` (`name`, `is_backend_access`, `status`) VALUES ('admin', 1, 1);
INSERT INTO `role` (`name`, `is_backend_access`, `status`) VALUES ('sub_admin', 1, 1);
INSERT INTO `role` (`name`, `is_backend_access`, `status`) VALUES ('member', 0, 1);
");
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 *
	 * @return bool
	 */
	public function down(): bool {
		echo "m1675239420_add_default_roles cannot be reverted.\n";
		return false;
	}
}
