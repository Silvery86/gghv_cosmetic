<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:40 AM
 **/

namespace app\common\lib;

use Exception;
use PDO;

/**
 * Class Model.
 * This class contains all default methods for the model.
 */
class Model extends Validator {

	/**
	 * @var Database $db The instance of the "\app\common\lib\Database" class
	 */
	public Database $db;

	/**
	 * @var string $tableName Name of the table which the model representative
	 */
	public string $tableName;

	/**
	 * Model constructor.
	 */
	public function __construct() {
		$this->db        = new Database();
		$this->tableName = static::getTableName();
		$this->casts();
	}

	/**
	 * Return name of the table which the model representative.
	 *
	 * @return string
	 */
	public static function getTableName(): string {
		return '';
	}

	/**
	 * Get model attributes.
	 *
	 * @return array|false
	 */
	public static function getAttributes() {
		$model     = new static();
		$statement = $model->db->prepare("DESCRIBE $model->tableName");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_COLUMN);
	}

	/**
	 * Find one record by given conditions in the database.
	 *
	 * @param array  $conditions
	 * @param string $additionCond
	 *
	 * @return false|mixed|object
	 */
	public static function findOne(array $conditions, string $additionCond = '') {
		$model      = new static();
		$attributes = array_keys($conditions);
		$query      = implode(' AND ', array_map(fn($attr) => "$attr = :$attr", $attributes));
		$statement  = $model->db->prepare("SELECT * FROM $model->tableName WHERE $query $additionCond LIMIT 1");
		foreach ($conditions as $key => $item) {
			$statement->bindValue(":$key", $item);
		}
		$statement->execute();
		return $statement->fetchObject(static::class);
	}

	/**
	 * Find all records by given conditions in the database.
	 *
	 * @param array  $conditions
	 * @param string $additionCond
	 *
	 * @return array|false
	 */
	public static function findAll(array $conditions = [], string $additionCond = '') {
		$model      = new static();
		$attributes = array_keys($conditions);
		$query      = implode(' AND ', array_map(fn($attr) => "$attr = :$attr", $attributes));
		if (!empty($conditions)) {
			$statement = $model->db->prepare("SELECT * FROM $model->tableName WHERE $query $additionCond");
			foreach ($conditions as $key => $item) {
				$statement->bindValue(":$key", $item);
			}
		} else {
			$statement = $model->db->prepare("SELECT * FROM $model->tableName $additionCond");
		}
		$statement->execute();
		return $statement->fetchAll();
	}

	/**
	 * Find one by the given model.
	 *
	 * @param string $class
	 * @param array  $conditions
	 *
	 * @return array|false
	 */
	public function hasOne(string $class, array $conditions) {
		$model = new $class();
		return $model->findOne($conditions);
	}

	/**
	 * Find all by the given model.
	 *
	 * @param string $class
	 * @param array  $conditions
	 *
	 * @return array|false
	 */
	public function hasMany(string $class, array $conditions) {
		$model = new $class();
		return $model->findAll($conditions);
	}

	/**
	 * Insert new record into the database.
	 *
	 * @param array $data
	 *
	 * @return bool
	 */
	public function insert(array $data): bool {
		if (!$this->validate()) {
			return false;
		}
		if (!$this->beforeSave()) {
			return false;
		}
		$attributes = implode(',', array_map(fn($attr) => "$attr", array_keys($data)));
		$values     = implode(',', array_map(fn($val) => "'$val'", array_values($data)));
		$this->db->beginTransaction();
		try {
			$statement = $this->db->prepare("INSERT INTO $this->tableName ($attributes) VALUES ($values)");
			$statement->execute();
			$this->db->commit();
		} catch (Exception $e) {
			$this->db->rollBack();
			return false;
		}
		if (!$this->afterSave()) {
			return false;
		}
		return true;
	}

	/**
	 * Update an existed record in the database.
	 *
	 * @param int   $id
	 * @param array $data
	 *
	 * @return bool
	 */
	public function update(int $id, array $data): bool {
		if (!$this->validate()) {
			return false;
		}
		if (!$this->beforeSave()) {
			return false;
		}
		$this->updateAttributes($id, $data);
		if (!$this->afterSave()) {
			return false;
		}
		return true;
	}

	/**
	 * Update attributes without validation.
	 *
	 * @param int   $id
	 * @param array $data
	 *
	 * @return bool
	 */
	public function updateAttributes(int $id, array $data): bool {
		$query = implode(',', array_map(fn($attr) => "$attr = :$attr", array_keys($data)));
		$this->db->beginTransaction();
		try {
			$statement = $this->db->prepare("UPDATE $this->tableName SET $query WHERE id=$id");
			foreach ($data as $key => $value) {
				$statement->bindValue(":$key", $value);
			}
			$statement->execute();
			$this->db->commit();
		} catch (Exception $e) {
			$this->db->rollBack();
			return false;
		}
		return true;
	}

	/**
	 * Delete an existed record in the database.
	 *
	 * @param int $id
	 *
	 * @return bool
	 */
	public function delete(int $id): bool {
		if (!$this->beforeDelete()) {
			return false;
		}
		$this->db->beginTransaction();
		try {
			$statement = $this->db->prepare("DELETE FROM $this->tableName WHERE id=$id");
			$statement->execute();
			$this->db->commit();
		} catch (Exception $e) {
			$this->db->rollBack();
			return false;
		}
		if (!$this->afterDelete()) {
			return false;
		}
		return true;
	}

	/**
	 * This method is called at the beginning of inserting or updating a record.
	 *
	 * @return bool
	 */
	protected function beforeSave(): bool {
		return true;
	}

	/**
	 * This method is called at the end of inserting or updating a record.
	 *
	 * @return bool
	 */
	protected function afterSave(): bool {
		return true;
	}

	/**
	 * This method is invoked before deleting a record.
	 *
	 * @return bool
	 */
	protected function beforeDelete(): bool {
		return true;
	}

	/**
	 * This method is invoked after deleting a record.
	 *
	 * @return bool
	 */
	protected function afterDelete(): bool {
		return true;
	}

	/**
	 * Cast model attributes to their correct datatype.
	 */
	private function casts() {
		$statement = $this->db->prepare("DESCRIBE $this->tableName");
		$statement->execute();
		$model = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($model as $attributes) {
			$attribute = (string) $attributes['Field'] ?? (string) $attributes['field'];
			$type      = strtolower($attributes['Type']);
			if (strpos($type, 'char') || strpos($type, 'text') || strpos($type, 'enum') || strpos($type, 'binary')) {
				settype($this->$attribute, 'string');
			}
			if (strpos($type, 'int')) {
				settype($this->$attribute, 'integer');
			}
			if (strpos($type, 'float') || strpos($type, 'double') || strpos($type, 'decimal') || strpos($type, 'dec')) {
				settype($this->$attribute, 'float');
			}
			if (strpos($type, 'blob')) {
				settype($this->$attribute, 'object');
			}
		}
	}
}
