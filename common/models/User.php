<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    17/1/2023
 * @time    11:22 AM
 **/

namespace app\common\models;

use app\common\helpers\PasswordHelper;
use app\common\interfaces\IdentityInterface;
use app\common\lib\Model;

/**
 * This is the model of the "user" table.
 *
 * @property int         $id
 * @property int         $role_id
 * @property int|null    $parent_id
 * @property string      $email
 * @property string      $username
 * @property string      $password_hash
 * @property string      $auth_key
 * @property string|null $verification_token
 * @property string|null $forgot_password_token
 * @property string|null $registration_ip
 * @property int         $status 0: inactive, 1: active, 2: blocked
 * @property int|null    $confirmed_at
 * @property int|null    $last_login_at
 * @property int|null    $blocked_at
 * @property int         $created_at
 * @property int         $updated_at
 */
class User extends Model implements IdentityInterface {

	const STATUS_INACTIVE = 0;

	const STATUS_ACTIVE   = 1;

	const STATUS_BLOCKED  = 2;

	const STATUS          = [
		self::STATUS_INACTIVE => 'Inactive',
		self::STATUS_ACTIVE   => 'Active',
		self::STATUS_BLOCKED  => 'Blocked',
	];

	/**
	 * {@inheritDoc}
	 */
	public static function getTableName(): string {
		return 'user';
	}

	/**
	 * {@inheritDoc}
	 */
	public function rules(): array {
		return [
			[
				[
					'role_id',
					'email',
					'username',
					'password_hash',
					'auth_key',
					'created_at',
					'updated_at',
				],
				'required',
			],
			[
				[
					'role_id',
					'parent_id',
					'status',
					'confirmed_at',
					'last_login_at',
					'blocked_at',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				[
					'username',
					'password_hash',
					'auth_key',
					'verification_token',
					'forgot_password_token',
					'registration_ip',
				],
				'string',
			],
			[
				['email'],
				'email',
			],
			[
				[
					'email',
					'username',
					'password_hash',
					'verification_token',
					'forgot_password_token',
				],
				'max',
				255,
			],
			[
				['auth_key'],
				'max',
				32,
			],
			[
				['registration_ip'],
				'max',
				45,
			],
		];
	}

	/**
	 * Gets query for [[Role]].
	 *
	 * @return array|false
	 */
	public function getRole() {
		return $this->hasOne(Role::class, ['id' => $this->role_id]);
	}

	/**
	 * {@inheritDoc}
	 */
	public static function findIdentity(int $id) {
		return static::findOne([
			'id'     => $id,
			'status' => self::STATUS_ACTIVE,
		]);
	}

	/**
	 * {@inheritDoc}
	 */
	public static function findByUsername(string $username) {
		return static::findOne([
			'username' => $username,
			'status'   => self::STATUS_ACTIVE,
		]);
	}

	/**
	 * {@inheritDoc}
	 */
	public static function generatePasswordHash(string $password): string {
		return PasswordHelper::hash($password);
	}

	/**
	 * {@inheritDoc}
	 */
	public static function validatePassword(string $password, string $hash): bool {
		return PasswordHelper::verify($password, $hash);
	}
}
