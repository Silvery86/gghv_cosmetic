<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:36 AM
 **/

namespace app\common\lib;

use PDO;
use PDOException;
use PDOStatement;

/**
 * Class Database.
 * This class handles connecting to the database and performs any methods that affect the database.
 */
class Database {

	/**
	 * @var PDO|null $pdo PDO instance
	 */
	public ?PDO $pdo = null;

	/**
	 * @var int $transactionCount Transaction count
	 */
	protected int $transactionCount = 0;

	/**
	 * Database constructor.
	 */
	public function __construct() {
		$config = include __DIR__ . '/../config/db.php';
		return $this->connect($config);
	}

	/**
	 * Prepares a statement for execution and returns a statement object.
	 *
	 * @param string $query
	 *
	 * @return PDOStatement
	 */
	public function prepare(string $query): PDOStatement {
		return $this->pdo->prepare($query);
	}

	/**
	 * Create PDO transaction.
	 *
	 * @return bool
	 */
	public function beginTransaction(): bool {
		if (!$this->transactionCount ++) {
			return $this->pdo->beginTransaction();
		}
		$this->pdo->exec("SAVEPOINT trans $this->transactionCount");
		return $this->transactionCount >= 0;
	}

	/**
	 * Commits a transaction.
	 *
	 * @return bool
	 */
	public function commit(): bool {
		if (!-- $this->transactionCount) {
			return $this->pdo->commit();
		}
		return $this->transactionCount >= 0;
	}

	/**
	 * Rolls back a transaction.
	 *
	 * @return bool
	 */
	public function rollBack(): bool {
		if (-- $this->transactionCount) {
			$transactionCount = $this->transactionCount + 1;
			$this->pdo->exec("ROLLBACK TO trans $transactionCount");
			return true;
		}
		return $this->pdo->rollBack();
	}

	/**
	 * Create a new migration.
	 *
	 * @param string $migrationName
	 */
	public function createMigration(string $migrationName) {
		$migration = 'm' . strtotime(date('Y-m-d H:i:s', time())) . '_' . $migrationName;
		$file      = fopen(__DIR__ . '/../migrations/' . $migration . '.php', 'w');
		$template  = "<?php
namespace app\common\migrations;
use app\common\lib\Database;	
/**
* Class $migration.
*/
class $migration {
	/**
	* This method contains the logic to be executed when apply this migration.
    *
    * @return false|int
    */
	public function up() {
		\$db = new Database();
		return \$db->pdo->exec(\"\");
	}
	/**
	* This method contains the logic to be executed when removing this migration.
    * 
    * @return bool
    */
	public function down(): bool {
		echo \"$migration cannot be reverted.\\n\";
        return false;
	}
}";
		fwrite($file, $template);
		fclose($file);
	}

	/**
	 * Apply migrations.
	 */
	public function applyMigrations() {
		$this->createMigrationsTable();
		$appliedMigrations = $this->getAppliedMigrations();
		$newMigrations     = [];
		$files             = scandir(__DIR__ . '/../migrations/');
		$toApplyMigrations = array_diff($files, $appliedMigrations);
		foreach ($toApplyMigrations as $migration) {
			if ($migration === '.' || $migration === '..') {
				continue;
			}
			include __DIR__ . '/../migrations/' . $migration;
			$className = 'app\common\migrations\\' . pathinfo($migration, PATHINFO_FILENAME);
			$instance  = new $className();
			$this->log('Applying migration ' . $migration);
			$instance->up();
			$this->log('Applied migration ' . $migration);
			$newMigrations[] = $migration;
		}
		if (!empty($newMigrations)) {
			$this->saveMigrations($newMigrations);
		} else {
			$this->log('There are no migrations to apply');
		}
	}

	/**
	 * Down an existing migration.
	 *
	 * @param string $migration
	 */
	public function downMigrations(string $migration) {
		$file = __DIR__ . '/../migrations/' . $migration . '.php';
		if (file_exists($file)) {
			include $file;
			$className = 'app\common\migrations\\' . pathinfo($migration, PATHINFO_FILENAME);
			$instance  = new $className();
			$this->log('Downing migration ' . $migration);
			$instance->down();
			$this->log('Downed migration ' . $migration);
		}
	}

	/**
	 * Connect to the database.
	 *
	 * @param array $config
	 *
	 * @return PDO|void|null
	 */
	private function connect(array $config) {
		$driver    = $config['driver'] ?? 'mysql';
		$host      = $config['host'] ?? 'localhost';
		$charset   = $config['charset'] ?? 'utf8';
		$collation = $config['collation'] ?? 'utf8_unicode_ci';
		$port      = $config['port'] ?? 3306;
		if (in_array($driver, [
			'',
			'mysql',
			'pgsql',
		])) {
			$dsn = $driver . ':host=' . str_replace(':' . $port, '', $host) . ';' . (!empty($port) ? 'port=' . $port . ';' : '') . 'dbname=' . $config['database'];
		} else if ($driver === 'sqlite') {
			$dsn = 'sqlite:' . $config['database'];
		} else {
			$dsn = '';
		}
		if (is_null($this->pdo)) {
			try {
				$this->pdo = new PDO($dsn, $config['username'], $config['password']);
				$this->pdo->exec("SET NAMES '$charset' COLLATE '$collation'");
				$this->pdo->exec("SET CHARACTER SET '$charset'");
				$this->pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET sql_mode="NO_BACKSLASH_ESCAPES"');
				if ($config['debug'] === true) {
					$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
				} else {
					$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
				$this->pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
			} catch (PDOException $e) {
				die('Cannot the connect to Database with PDO. ' . $e->getMessage());
			}
		}
		return $this->pdo;
	}

	/**
	 * Create the "migrations" table.
	 */
	private function createMigrationsTable() {
		$this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;");
	}

	/**
	 * Get migrations has been applied .
	 *
	 * @return array|false
	 */
	private function getAppliedMigrations() {
		$statement = $this->pdo->prepare("SELECT migration FROM migrations");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_COLUMN);
	}

	/**
	 * Save new migrations.
	 *
	 * @param array $newMigrations
	 */
	private function saveMigrations(array $newMigrations) {
		$str       = implode(',', array_map(fn($m) => "('$m')", $newMigrations));
		$statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES $str");
		$statement->execute();
	}

	/**
	 * Display DB log.
	 *
	 * @param string $message
	 */
	private function log(string $message) {
		echo '[' . date('Y-m-d H:i:s') . '] - ' . $message . PHP_EOL;
	}
}
