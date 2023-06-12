<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    12:33 AM
 **/
/**
 * Web parameters.
 *
 * [common]:        Common parameters for both backend and frontend site.
 * [backend]:       Parameters for backend site.
 * [frontend]:      Parameters for frontend site.
 */
return [
	'common'   => [
		'smtp'            => [
			'smtp_server'       => '',
			'smtp_port'         => '',
			'smtp_username'     => '',
			'smtp_password'     => '',
			'smtp_sender_email' => '',
			'smtp_sender_name'  => '',
		],
		'email_whitelist' => [
			'@gmail.com',
			'@hotmail.com',
			'@yahoo.com',
		],
	],
	'backend'  => [
		'name'      => 'PShop',
		'favicon'   => 'img/logo.png',
		'url'       => 'http://admin.pshop.demo',
		'reCaptcha' => [
			'site_key'   => '6LdbE0YiAAAAAP4THgJcBcnTdauwmdwW4uA1OolQ',
			'secret_key' => '6LdbE0YiAAAAAEKGB8X-lsn-st6Dt3QUBXyqDFD4',
		],
	],
	'frontend' => [
		'name'    => 'PShop',
		'favicon' => '',
		'url'     => 'http://phpshop.demo',
	],
];
