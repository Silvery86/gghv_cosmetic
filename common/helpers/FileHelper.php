<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    2:56 AM
 **/

namespace app\common\helpers;

use app\common\lib\App;
use Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * File helper.
 */
class FileHelper {

	/**
	 * Upload image.
	 *
	 * @param        $file
	 * @param string $uploadFolder
	 *
	 * @return false|string
	 * @throws Exception
	 */
	public static function uploadImage($file, string $uploadFolder) {
		$maxSize    = 2097152;
		$acceptable = [
			'image/jpeg',
			'image/jpg',
			'image/gif',
			'image/png',
		];
		$imageType  = exif_imagetype($file['tmp_name']);
		if ((!in_array($file['type'], $acceptable)) && (!empty($file['type']))) {
			return false;
		}
		if (filesize($file['tmp_name']) > $maxSize) {
			return false;
		}
		$imageExtension = image_type_to_extension($imageType, true);
		$imageName      = bin2hex(random_bytes(16)) . $imageExtension;
		$upload         = move_uploaded_file($file['tmp_name'], __DIR__ . '/../../public/web/assets/img/uploads/' . $uploadFolder . '/' . $imageName);
		if (!$upload) {
			return false;
		}
		return self::getFrontendUrl() . '/web/assets/img/uploads/' . $uploadFolder . '/' . $imageName;
	}

	/**
	 * Remove existing image.
	 *
	 * @param $image
	 */
	public static function removeImage($image) {
		$file = __DIR__ . '/../../' . str_replace(self::getFrontendUrl(), 'public/web/', $image);
		if (file_exists($file)) {
			unlink($file);
		}
	}

	/**
	 * Convert the given image to base64.
	 *
	 * @param $image
	 *
	 * @return string
	 */
	public static function getBase64($image): string {
		$type = pathinfo($image, PATHINFO_EXTENSION);
		$data = file_get_contents($image);
		return 'data:image/' . $type . ';base64,' . base64_encode($data);
	}

	/**
	 * Get data from uploaded xlsx file.
	 *
	 * @param $model
	 * @param $file
	 *
	 * @return bool
	 *
	 * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public static function uploadExcelFile($model, $file): bool {
		if (empty($file['name'])) {
			return false;
		}
		if (pathinfo($file['name'])['extension'] !== 'xlsx') {
			return false;
		}
		$reader = IOFactory::createReader(IOFactory::identify($file['tmp_name']));
		$xlsx   = $reader->load($file['tmp_name'])->getActiveSheet()->toArray();
		if (!$xlsx) {
			return false;
		}
		$attributes = $xlsx[0];
		unset($xlsx[0]);
		foreach ($xlsx as $arrayValue) {
			$data = array_combine($attributes, $arrayValue);
			if (!$data) {
				return false;
			}
			foreach ($data as $key => $value) {
				if (!is_int($key)) {
					$property = strtolower($key);
					@$model->$property = self::cleanInput($value);
				}
			}
			if (!$model->save()) {
				return false;
			}
		}
		return true;
	}

	/**
	 * Get Frontend url.
	 *
	 * @return mixed
	 */
	private static function getFrontendUrl() {
		$app = new App();
		return $app->params['frontend']['url'];
	}

	/**
	 * Cleaned the given input.
	 *
	 * @param $input
	 *
	 * @return array|string|string[]|null
	 */
	private static function cleanInput($input) {
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
