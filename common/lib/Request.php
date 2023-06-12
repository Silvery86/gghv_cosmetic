<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:47 AM
 **/

namespace app\common\lib;
/**
 * Class Request.
 * This class handles any methods that affected the HTTP request.
 */
class Request {

	const BAD_REQUEST           = 400;

	const UNAUTHORIZED          = 401;

	const FORBIDDEN             = 403;

	const NOT_FOUND             = 404;

	const INTERNAL_SERVER_ERROR = 500;

	/**
	 * Return HTTP response.
	 *
	 * @return array
	 */
	public static function getError(): array {
		$response = [];
		switch (http_response_code()) {
			case self::BAD_REQUEST:
				$response = [
					'code'    => self::BAD_REQUEST,
					'status'  => 'Bad Request',
					'message' => 'Something went wrong, please try again later.',
				];
				break;
			case self::UNAUTHORIZED:
				$response = [
					'code'    => self::UNAUTHORIZED,
					'status'  => 'Unauthorized',
					'message' => 'Something went wrong, please try again later.',
				];
				break;
			case self::FORBIDDEN:
				$response = [
					'code'    => self::FORBIDDEN,
					'status'  => 'Forbidden',
					'message' => 'You do not have permission to access this page.',
				];
				break;
			case self::NOT_FOUND:
				$response = [
					'code'    => self::NOT_FOUND,
					'status'  => 'Page Not Found',
					'message' => 'We have a problem. We are having trouble loading the page you are looking for.',
				];
				break;
			case self::INTERNAL_SERVER_ERROR:
				$response = [
					'code'    => self::INTERNAL_SERVER_ERROR,
					'status'  => 'Internal Server Error',
					'message' => 'Something went wrong, please try again later.',
				];
				break;
		}
		return $response;
	}

	/**
	 * Set HTTP response status.
	 *
	 * @param int    $code
	 * @param string $errorPath
	 */
	public static function setHttpResponse(int $code, string $errorPath) {
		http_response_code($code);
		include $errorPath;
		exit();
	}
}
