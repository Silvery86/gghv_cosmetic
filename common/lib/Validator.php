<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:41 AM
 **/

namespace app\common\lib;

use app\common\helpers\EmailHelper;

/**
 * Class Validator.
 * This class handles any methods that support model input validation.
 */
class Validator {

	const FLAG_STRING   = 'string';

	const FLAG_INTEGER  = 'integer';

	const FLAG_FLOAT    = 'float';

	const FLAG_NUMERIC  = 'number';

	const FLAG_URL      = 'url';

	const FLAG_EMAIL    = 'email';

	const FLAG_REQUIRED = 'required';

	const FLAG_MATCH    = 'match';

	const FLAG_MIN      = 'min';

	const FLAG_MAX      = 'max';

	const FLAGS         = [
		self::FLAG_STRING,
		self::FLAG_INTEGER,
		self::FLAG_FLOAT,
		self::FLAG_NUMERIC,
		self::FLAG_URL,
		self::FLAG_EMAIL,
		self::FLAG_REQUIRED,
		self::FLAG_MATCH,
		self::FLAG_MIN,
		self::FLAG_MAX,
	];

	/**
	 * @var array $errors Array of errors
	 */
	public array $errors;

	/**
	 * Get errors.
	 *
	 * @return array
	 */
	public function getErrors(): array {
		return $this->errors;
	}

	/**
	 * Model rules.
	 *
	 * @return array
	 */
	protected function rules(): array {
		return [];
	}

	/**
	 * Model validation.
	 *
	 * @return bool
	 */
	protected function validate(): bool {
		$rules = $this->rules();
		if (empty($rules)) {
			$this->setErrors(static::class, 'Missing rules.');
			return false;
		}
		foreach ($rules as $rule) {
			$attributes = $rule[0] ?? [];
			$flag       = $rule[1] ?? '';
			$expression = $rule[2] ?? null;
			if (!$this->beforeValidate($attributes, $flag)) {
				return false;
			}
			if (!$this->validator($attributes, $flag, $expression)) {
				return false;
			}
		}
		return true;
	}

	/**
	 * Set errors.
	 *
	 * @param string $attribute
	 * @param string $message
	 */
	protected function setErrors(string $attribute, string $message) {
		$this->errors['attribute'] = $attribute;
		$this->errors['message']   = $message;
	}

	/**
	 * Before validate.
	 *
	 * @param $attributes
	 * @param $flag
	 *
	 * @return bool
	 */
	private function beforeValidate($attributes, $flag): bool {
		if (empty($attributes) || empty($flag) || !is_array($attributes) || !is_string($flag)) {
			$this->setErrors(static::class, 'Invalid rules.');
			return false;
		}
		if (count(array_intersect($attributes, static::getAttributes())) !== count($attributes)) {
			$invalidAttributes = array_diff($attributes, static::getAttributes());
			$this->setErrors(static::class, 'Getting unknown property: ' . implode(', ', $invalidAttributes) . '.');
			return false;
		}
		if (!in_array($flag, self::FLAGS)) {
			$this->setErrors(static::class, 'Getting unknown flag: ' . $flag);
			return false;
		}
		return true;
	}

	/**
	 * The validator.
	 *
	 * @param array  $attributes
	 * @param string $flag
	 * @param        $expression
	 *
	 * @return bool
	 */
	private function validator(array $attributes, string $flag, $expression): bool {
		foreach ($attributes as $attribute) {
			$value = $this->$attribute;
			switch ($flag) {
				case self::FLAG_STRING:
					return $this->validateString($attribute, $value);
				case self::FLAG_INTEGER:
					return $this->validateInteger($attribute, $value);
				case self::FLAG_FLOAT:
					return $this->validateFloat($attribute, $value);
				case self::FLAG_NUMERIC:
					return $this->validateNumeric($attribute, $value);
				case self::FLAG_URL:
					return $this->validateUrl($attribute, $value);
				case self::FLAG_EMAIL:
					return $this->validateEmail($attribute, $value);
				case self::FLAG_REQUIRED:
					return $this->validateRequired($attribute, $value);
				case self::FLAG_MATCH:
					return $this->validateMatch($attribute, $value, $expression);
				case self::FLAG_MIN:
					return $this->validateMin($attribute, $value, $expression);
				case self::FLAG_MAX:
					return $this->validateMax($attribute, $value, $expression);
			}
		}
		return true;
	}

	/**
	 * Check attribute is string or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateString($attribute, $value): bool {
		if (!empty($value) && !is_string($value)) {
			$this->setErrors($attribute, $attribute . ' is not a valid string.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute is integer or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateInteger($attribute, $value): bool {
		if (!empty($value) && !is_int($value)) {
			$this->setErrors($attribute, $attribute . ' is not a valid integer.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute is float or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateFloat($attribute, $value): bool {
		if (!empty($value) && !is_float($value)) {
			$this->setErrors($attribute, $attribute . ' is not a valid float.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute is numeric or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateNumeric($attribute, $value): bool {
		if (!empty($value) && !is_numeric($value)) {
			$this->setErrors($attribute, $attribute . ' is not a valid number.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute is URL or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateUrl($attribute, $value): bool {
		if (!empty($value) && !filter_var($value, FILTER_VALIDATE_URL)) {
			$this->setErrors($attribute, $attribute . ' is not a valid URL.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute is whitelist email or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateEmail($attribute, $value): bool {
		if (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
			$this->setErrors($attribute, $attribute . ' is not a valid email.');
			return false;
		}
		if (!EmailHelper::isInWhiteList($value)) {
			$this->setErrors($attribute, $attribute . ' is not in whitelist.');
			return false;
		}
		return true;
	}

	/**
	 * Check required attribute exists or not.
	 *
	 * @param $attribute
	 * @param $value
	 *
	 * @return bool
	 */
	private function validateRequired($attribute, $value): bool {
		if (!preg_match('/\S/', $value)) {
			$this->setErrors($attribute, $attribute . ' cannot be blank.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute match the expression or not.
	 *
	 * @param $attribute
	 * @param $value
	 * @param $expression
	 *
	 * @return bool
	 */
	private function validateMatch($attribute, $value, $expression): bool {
		if (empty($expression)) {
			$this->setErrors($attribute, 'Rule "match" need an expression to be compared.');
			return false;
		}
		if (!empty($value) && !preg_match($expression, $value)) {
			$this->setErrors($attribute, '"' . $attribute . '" does not match the given expression.');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute min value match the expression or not.
	 *
	 * @param $attribute
	 * @param $value
	 * @param $expression
	 *
	 * @return bool
	 */
	private function validateMin($attribute, $value, $expression): bool {
		if (empty($expression)) {
			$this->setErrors($attribute, 'Rule "min" need an expression to be compared.');
			return false;
		}
		if (!empty($value) && strlen($value) < $expression) {
			$this->setErrors($attribute, '"' . $attribute . '" cannot be less than ' . $expression . ' characters');
			return false;
		}
		return true;
	}

	/**
	 * Check attribute max value match the expression or not.
	 *
	 * @param $attribute
	 * @param $value
	 * @param $expression
	 *
	 * @return bool
	 */
	private function validateMax($attribute, $value, $expression): bool {
		if (empty($expression)) {
			$this->setErrors($attribute, 'Rule "max" need an expression to be compared.');
			return false;
		}
		if (!empty($value) && strlen($value) > $expression) {
			$this->setErrors($attribute, '"' . $attribute . '" cannot be more than ' . $expression . ' characters');
			return false;
		}
		return true;
	}
}
