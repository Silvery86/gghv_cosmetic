<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    12:22 AM
 **/

namespace app\common\lib;
/**
 * Class App.
 * This class handles getting params and assets configurations and then makes it "callable" on the View.
 * Besides, this class also performs any methods that affect the View.
 */
class App {

	/**
	 * @var array $assets Assets configuration array
	 */
	public array $assets = [];

	/**
	 * @var array $params Web params configuration array
	 */
	public array $params = [];

	/**
	 * @var string Path to the layout folder
	 */
	public string $layoutPath;

	/**
	 * @var array|string[] default header files
	 */
	public array $defaultHeaders = [
		'header',
		'navbar',
		'left-sidebar',
		'right-sidebar',
	];

	/**
	 * @var array|string[] default footer files
	 */
	public array $defaultFooter = [
		'footer',
	];

	/**
	 * Asset constructor.
	 */
	public function __construct() {
		$this->assets = include __DIR__ . '/../config/assets.php';
		$this->params = include __DIR__ . '/../config/params.php';
	}

	/**
	 * Register default CSS and JS tags.
	 *
	 * @param string $module
	 */
	public function registerAssets(string $module) {
		$assetTags = '';
		if (!empty($this->assets) && !empty($this->assets[$module])) {
			$cssTags    = array_map(function($css) {
				return "<link rel=\"stylesheet\" type=\"text/css\" href=\"/web/assets/$css\">";
			}, $this->assets[$module]['css']);
			$jsTags     = array_map(function($js) {
				return "<script src=\"/web/assets/$js\" defer></script>";
			}, $this->assets[$module]['js']);
			$jqueryTags = array_map(function($js) {
				return "<script src=\"/web/assets/$js\"></script>";
			}, $this->assets[$module]['jquery']);
			$assetTags  .= implode('', $cssTags);
			$assetTags  .= implode('', $jsTags);
			$assetTags  .= implode('', $jqueryTags);
		}
		echo $assetTags;
	}

	/**
	 * Register optional CSS tag.
	 *
	 * @param string $css
	 */
	public function registerCss(string $css) {
		echo "<style>$css</style>";
	}

	/**
	 * Register optional JS tag.
	 *
	 * @param string $script
	 */
	public function registerJs(string $script) {
		echo "<script>$script</script>";
	}

	/**
	 * Render header files.
	 *
	 * @param array $additionalFiles
	 */
	public function pageBegin(array $additionalFiles = []) {
		$files = array_merge($this->defaultHeaders, $additionalFiles);
		$this->renderLayout($files);
	}

	/**
	 * Render footer files.
	 *
	 * @param array $additionalFiles
	 */
	public function pageEnd(array $additionalFiles = []) {
		$files = array_merge($this->defaultFooter, $additionalFiles);
		$this->renderLayout($files);
	}

	/**
	 * Render layout files if exists.
	 *
	 * @param array $files
	 */
	private function renderLayout(array $files) {
		if (!empty($this->layoutPath)) {
			foreach ($files as $file) {
				$filePath = $this->layoutPath . '/' . $file . '.php';
				if (file_exists($filePath)) {
					include $filePath;
				}
			}
		}
	}
}
