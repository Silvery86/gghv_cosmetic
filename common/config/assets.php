<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    12:30 AM
 **/
/**
 * Assets configuration.
 *
 * [backend]:       Backend assets
 * [frontend]:      Frontend assets
 *
 * [css]:           Path to CSS files
 * [js]:            Path to JavaScript files
 * [jquery]:        Path to jQuery files
 */
return [
	'backend'  => [
		'css'    => [
			'plugins/bootstrap/css/bootstrap.min.css',
			'css/font-awesome.min.css',
			'css/simple-line-icons.css',
			'css/animate.css',
			'plugins/messenger/css/messenger.css',
			'plugins/messenger/css/messenger-theme-flat.css',
			'plugins/messenger/css/location-sel.css',
			'plugins/daterangepicker/daterangepicker-bs3.css',
			'plugins/switchery/switchery.min.css',
			'plugins/dataTables/css/dataTables.css',
			'css/main.css',
			'css/custom.css',
			'css/responsive.css',
		],
		'js'     => [
			'js/vendor/modernizr-2.6.2.min.js',
			'plugins/bootstrap/js/bootstrap.min.js',
			'plugins/navgoco/jquery.navgoco.min.js',
			'plugins/pace/pace.min.js',
			'plugins/fullscreen/jquery.fullscreen-min.js',
			'js/src/app.js',
			'js/src/chart.js',
			'js/src/custom.js',
			// Page level js
			'plugins/countTo/jquery.countTo.js',
			'plugins/weather/js/skycons.js',
			'plugins/daterangepicker/moment.min.js',
			'plugins/daterangepicker/daterangepicker.js',
			'plugins/chartjs/Chart.min.js',
			'plugins/morris/js/morris.min.js',
			'plugins/morris/js/raphael.2.1.0.min.js',
			'plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js',
			'plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js',
			'plugins/gauge/gauge.min.js',
			'plugins/calendar/clndr.js',
			'plugins/libs/underscore-min.js',
			'plugins/switchery/switchery.min.js',
			'plugins/dataTables/js/jquery.dataTables.js',
			'plugins/dataTables/js/dataTables.bootstrap.js',
			'plugins/dataTables/js/dataTables.buttons.js',
			'plugins/dataTables/js/jszip.js',
			'plugins/dataTables/js/pdfmake.js',
			'plugins/dataTables/js/vfs_fonts.js',
			'plugins/dataTables/js/buttons.html5.js',
			'plugins/dataTables/js/buttons.print.js',
			'js/vendor/sweetalert2.all.min.js',
			'js/src/ex-component-sweet-alerts.min.js',
			// Gauge demo
			'plugins/gauge/gauge-demo.js',
			// Calendar demo
			'plugins/calendar/clndr-demo.js',
		],
		'jquery' => [
			'js/vendor/jquery-1.11.1.min.js',
		],
	],
	'frontend' => [
		'css'    => [],
		'js'     => [],
		'jquery' => [],
	],
];
