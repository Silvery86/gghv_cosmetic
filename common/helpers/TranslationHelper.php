<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    3:04 AM
 **/

namespace app\common\helpers;

use Exception;

/**
 * Translation helper.
 * Internationalization with client language autodetect.
 */
class TranslationHelper {

	/**
	 * @var string $localesDir Directory path of the locale files
	 */
	protected static string $localesDir = __DIR__ . '/../config/locales';

	/**
	 * @var string $defaultLanguage The default language to use if the client language or the forced language locales are not found
	 */
	protected static string $defaultLanguage = 'en-US';

	/**
	 * @var array $loadedLocales Array where loaded locales will be kept to avoid the need of reload the locale file
	 */
	protected static array $loadedLocales = [];

	/**
	 * @var string $currentLanguage The current language being used to translate
	 */
	protected static string $currentLanguage = '';

	/**
	 * @var bool $initialized Determine whether the class has been initialized
	 */
	protected static bool $initialized = false;

	/**
	 * @type array $parameterEnclosingChars Definition of the enclosing characters for the parameters inside the translation strings
	 */
	protected static array $parameterEnclosingChars = [
		'{',
		'}',
	];

	/**
	 * Returns the translation of a specific key from the current language locale.
	 *
	 * @param string $localeKey
	 * @param array  $parameters
	 *
	 * @return string|null
	 *
	 * @throws Exception
	 */
	public static function of(string $localeKey, array $parameters = []): ?string {
		static::checkIfHasBeenInitialized();
		static::checkIfLocalesAreLoaded();
		if (!empty(static::$loadedLocales[static::$currentLanguage][$localeKey])) {
			$text = static::$loadedLocales[static::$currentLanguage][$localeKey];
			if (!empty($parameters) && is_array($parameters)) {
				foreach ($parameters as $parameter => $replacement) {
					$text = str_replace(static::$parameterEnclosingChars[0] . $parameter . static::$parameterEnclosingChars[1], $replacement, $text);
				}
			}
			return $text;
		}
		return null;
	}

	/**
	 * Used to set a custom locale directory.
	 *
	 * @param string $localesDir
	 *
	 * @throws Exception
	 */
	public static function setLocalesDir(string $localesDir) {
		if (!empty($localesDir)) {
			self::$localesDir = $localesDir;
			static::checkIfLocalesDirExists();
		}
	}

	/**
	 * Used to set a custom default language.
	 *
	 * @param string $defaultLanguage
	 *
	 * @throws Exception
	 */
	public static function setDefaultLanguage(string $defaultLanguage) {
		if (!empty($defaultLanguage)) {
			self::$defaultLanguage = $defaultLanguage;
			static::checkIfLocaleForDefaultLanguageExists();
		}
	}

	/**
	 * Used to force the translations in a specific language from now on.
	 * To cancel the enforcement, at any time, you can call "forceLanguage(null)",
	 * then it restarts using the client language or the default language.
	 *
	 * @param string $language
	 *
	 * @throws Exception
	 */
	public static function forceLanguage(string $language) {
		static::checkIfHasBeenInitialized();
		static::$currentLanguage = (!empty($language)) ? $language : static::getClientLanguage();
		static::checkIfLocalesAreLoaded();
	}

	/**
	 * Used to set custom parameter enclosing characters.
	 *
	 * @param string $openingChar
	 * @param string $closingChar
	 */
	public static function setParameterEnclosingChars(string $openingChar = '{', string $closingChar = '}') {
		if (!empty($openingChar) && is_string($openingChar) && !empty($closingChar) && is_string($closingChar)) {
			static::$parameterEnclosingChars = [
				$openingChar,
				$closingChar,
			];
		}
	}

	/**
	 * Checks if current language locale is already loaded. Loading new locales only when needed.
	 *
	 * @throws Exception
	 */
	protected static function checkIfLocalesAreLoaded() {
		if (empty(static::$loadedLocales[static::$currentLanguage])) {
			static::checkIfLocaleForCurrentLanguageExists();
			static::$loadedLocales[static::$currentLanguage] = include static::$localesDir . '/' . static::$currentLanguage . '.php';
		}
	}

	/**
	 * Returns the client language code.
	 *
	 * @return string|null Returns the ISO-639 Language Code followed by ISO-3166 Country Code, like 'en-US'. Null if PHP couldn't detect it.
	 */
	protected static function getClientLanguage(): ?string {
		return !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5) : null;
	}

	/**
	 * Checks if locale dir exists. If not, throws an exception.
	 *
	 * @throws Exception
	 */
	protected static function checkIfLocalesDirExists() {
		if (!is_dir(static::$localesDir)) {
			throw new Exception('Directory "' . static::$localesDir . '" not found!');
		}
	}

	/**
	 * Checks if locale for default language exists. If not, throws an exception.
	 *
	 * @throws Exception
	 */
	protected static function checkIfLocaleForDefaultLanguageExists() {
		if (!file_exists(static::$localesDir . '/' . static::$defaultLanguage . '.php')) {
			throw new Exception('Default language locale not found!');
		}
	}

	/**
	 * Checks if the class has been initialized.
	 *
	 * @throws Exception
	 */
	protected static function checkIfHasBeenInitialized() {
		if (!static::$initialized) {
			static::initialize();
		}
	}

	/**
	 * Initializes the class, setting up the default configuration.
	 *
	 * @throws Exception
	 */
	protected static function initialize() {
		static::checkIfLocalesDirExists();
		static::checkIfLocaleForDefaultLanguageExists();
		static::$currentLanguage = static::getClientLanguage();
		static::$initialized     = true;
	}

	/**
	 * Checks if locale for current language exists. If not, start using the default language.
	 */
	protected static function checkIfLocaleForCurrentLanguageExists() {
		if (!file_exists(static::$localesDir . '/' . static::$currentLanguage . '.php')) {
			static::$currentLanguage = static::$defaultLanguage;
		}
	}
}
