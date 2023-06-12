<?php

namespace app\core;
/**
 * Class View.
 * This class handles render view page.
 */
class View {

	/**
	 * @var string $title
	 */
	public $title = '';

	/**
	 * @var array $params
	 */
	public $params = [];

	/**
	 * @var array $assets
	 */
	public $assets = [];

	/**
	 * View Constructor.
	 */
	public function __construct() {
		$this->params = include __DIR__ . '/config/params.php';
		$this->assets = include __DIR__ . '/config/assets.php';
	}

	/**
	 * Register assets.
	 *
	 * @param string $module
	 */
	public function registerAssets(string $module) {
		$cssTags = '';
		$jsTags  = '';
		if (!empty($this->assets) && !empty($this->assets[$module])) {
			foreach ($this->assets[$module]['css'] as $css) {
				$cssTags .= '<link rel="stylesheet" type="text/css" href="' . $css . '">';
			}
			foreach ($this->assets[$module]['js'] as $js) {
				$jsTags .= '<script src="' . $js . '" defer></script>';
			}
			foreach ($this->assets[$module]['jquery'] as $js) {
				$jsTags .= '<script src="' . $js . '"></script>';
			}
		}
		echo $cssTags;
		echo $jsTags;
	}

	/**
	 * Register optional css.
	 *
	 * @param string $style
	 */
	public function registerCss(string $style) {
		echo '<style>' . $style . '</style>';
	}

	/**
	 * Register optional javascript.
	 *
	 * @param string $script
	 */
	public function registerJs(string $script) {
		echo '<script>' . $script . '</script>';
	}

	
}
