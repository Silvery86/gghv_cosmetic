<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    1/12/2023
 * @time    12:33 AM
 **/
/**
 * Database configuration.
 *
 * [driver]:        Specify database vendor implementation
 * [host]:          Server host name
 * [username]:      Server host username
 * [password]:      Server host password
 * [database]:      Database name
 * [port]:          Database running port
 * [charset]:       Database default charset
 * [collation]:     Database default collation
 * [debug]:         Turn on/off PDO debug mode
 */
return [
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'username'  => 'root',
	'password'  => 'mysql',
	'database'  => 'pshop_db',
	'port'      => 3306,
	'charset'   => 'utf8',
	'collation' => 'utf8mb4_unicode_ci',
	'debug'     => true,
];
