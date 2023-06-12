<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:48 AM
 **/

namespace app\common\lib;
/**
 * Class Security.
 * This class is used to handle the security system.
 */
class Security extends Csrf {

	/**
	 * @var string $error Path to error file
	 */
	public string $error = '';

	/**
	 * @var array|string[] $_patterns SQL injection patterns
	 */
	private array $_patterns = [
		"union",
		"cookie",
		"concat",
		"alter",
		"table",
		"from",
		"where",
		"exec",
		"shell",
		"wget",
		"**/",
		"/**",
		"0x3a",
		"null",
		"DR/**/OP/",
		"drop",
		"/*",
		"*/",
		"*",
		"--",
		";",
		"||",
		"'",
		"' #",
		"or 1=1",
		"'1'='1",
		"BUN",
		"S@BUN",
		"char",
		"OR%",
		"`",
		"[",
		"]",
		"<",
		">",
		"++",
		"script",
		"select",
		"1,1",
		"substring",
		"ascii",
		"sleep(",
		"&&",
		"and",
		"insert",
		"between",
		"values",
		"truncate",
		"benchmark",
		"sql",
		"mysql",
		"%27",
		"%22",
		"(",
		")",
		"<?",
		"<?php",
		"?>",
		"../",
		"/localhost",
		"127.0.0.1",
		"loopback",
		":",
		"%0A",
		"%0D",
		"%3C",
		"%3E",
		"%00",
		"%2e%2e",
		"input_file",
		"execute",
		"msconfig",
		"environ",
		"scanner",
		"path=.",
		"mod=.",
		"eval\(",
		"javascript:",
		"base64_",
		"boot.ini",
		"etc/passwd",
		"self/environ",
		"md5",
		"echo.*kae",
		"=%27$",
	];

	/**
	 * Security constructor.
	 */
	public function __construct() {
		parent::__construct();
		$_POST    = $this->sanitize($_POST);
		$_GET     = $this->sanitize($_GET);
		$_REQUEST = $this->sanitize($_REQUEST);
		$_COOKIE  = $this->sanitize($_COOKIE);
		if (isset($_SESSION)) {
			$_SESSION = $this->sanitize($_SESSION);
		}
		$queryString = $_SERVER['QUERY_STRING'];
		foreach ($this->_patterns as $pattern) {
			if (strlen($queryString) > 255 || strpos(strtolower($queryString), strtolower($pattern))) {
				Request::setHttpResponse(Request::BAD_REQUEST, $this->error);
			}
		}
	}

	/**
	 * Sanitized the given input.
	 *
	 * @param $input
	 *
	 * @return array|string
	 */
	private function sanitize($input) {
		if (is_array($input)) {
			$output = [];
			foreach ($input as $key => $value) {
				$output[$key] = $this->cleaninput($value);
			}
		} else {
			$output = htmlentities($this->cleaninput($input), ENT_QUOTES);
		}
		return @$output;
	}

	/**
	 * Cleaned the given input.
	 *
	 * @param $input
	 *
	 * @return array|string|string[]|null
	 */
	private function cleanInput($input) {
		$input  = str_replace('"', "", $input);
		$input  = str_replace("'", "", $input);
		$search = [
			'@<script[^>]*?>.*?</script>@si',
			'@<[/!]*?[^<>]*?>@si',
			'@<style[^>]*?>.*?</style>@siU',
			'@<![\s\S]*?--[ \t\n\r]*>@',
			'/[^\\S ]/',
		];
		return preg_replace($search, '', $input);
	}
}
