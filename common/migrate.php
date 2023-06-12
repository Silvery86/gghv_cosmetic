<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    11/1/2023
 * @time    5:41 PM
 **/

use app\common\lib\Database;

include __DIR__ . '/../vendor/autoload.php';
/**
 * Call existed functions.
 */
if (isset($argv[1]) && function_exists($argv[1])) {
	$parameters = array_slice($argv, 2);
	call_user_func($argv[1], ...$parameters);
}
/**
 * Create new migration.
 */
function create(string $migrationName) {
	$db = new Database();
	$db->createMigration($migrationName);
}

/**
 * Apply migrations.
 */
function apply() {
	$db = new Database();
	$db->applyMigrations();
}

/**
 * Down an existing migration.
 */
function down(string $migration) {
	$db = new Database();
	$db->downMigrations($migration);
}

