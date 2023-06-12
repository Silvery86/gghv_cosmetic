<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    17/1/2023
 * @time    11:22 AM
 **/

namespace app\common\models;

use app\common\lib\Model;

/**
 * This is the model class for table "role".
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $description
 * @property int         $is_admin 0: no, 1: yes
 * @property int         $status   0: inactive, 1: active
 */
class Role extends Model {

	const IS_ADMIN_NO     = 0;

	const IS_ADMIN_YES    = 1;

	const IS_ADMIN        = [
		self::IS_ADMIN_NO  => 'No',
		self::IS_ADMIN_YES => 'Yes',
	];

	const STATUS_INACTIVE = 0;

	const STATUS_ACTIVE   = 1;

	const STATUS          = [
		self::STATUS_INACTIVE => 'Inactive',
		self::STATUS_ACTIVE   => 'Active',
	];

	/**
	 * {@inheritDoc}
	 */
	public static function getTableName(): string {
		return 'role';
	}

	/**
	 * {@inheritDoc}
	 */
	public function rules(): array {
		return [
			[
				[
					'name',
				],
				'required',
			],
			[
				[
					'is_admin',
					'status',
				],
				'integer',
			],
			[
				[
					'name',
					'description',
				],
				'string',
			],
			[
				[
					'name',
					'description',
				],
				'max',
				255,
			],
		];
	}

	/**
	 * Gets query for [[Users]].
	 *
	 * @return array|false
	 */
	public function getUsers() {
		return $this->hasMany(User::class, ['role_id' => $this->id]);
	}
}
