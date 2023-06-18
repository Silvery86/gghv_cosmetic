<?php

namespace app\core;
/**
 * Class View.
 * This class handles render view page.
 */
class View {



	/**
	 * @var array $assets
	 */
	public $assets = [];

	/**
	 * View Constructor.
	 */
	public function __construct() {
		
		$this->assets = include __DIR__ . '/config/assets.php';
	}

	/**
	 * Register assets.
	 *
	 * @param string $module
	 */
	public function registerCSS(string $module) {
		$cssTags = '';
		
		if (!empty($this->assets) && !empty($this->assets[$module])) {
			foreach ($this->assets[$module]['css'] as $css) {
				
				$cssTags .= '<link rel="stylesheet" type="text/css" href="' . $css . '">';
			}
		}
		echo $cssTags;
	}

	public function registerJS(string $module) {
		$jsTags  = '';
		if (!empty($this->assets) && !empty($this->assets[$module])) {
			foreach ($this->assets[$module]['js'] as $js) {
				$jsTags .= '<script src="' . $js . '" defer></script>';
			}
		}
		echo $jsTags;
	}
	
}
