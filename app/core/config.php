<?php
/**
 * Set website title
 */
define('APP_NAME', 'Ad listing app');
/**
 * Set database credentials
 */
define('DB_HOST', 'localhost');
define('DB_TYPE', 'mysql');
define('DB_NAME', 'ad_listing_app');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
/**
 * Set protocol type
 */
define('PROTOCOL', 'http');
/**
 * Set root and assets paths
 */
$path = str_replace("\\", "/", PROTOCOL ."://" . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));
/**
 * Sets error reporting for different environments
 */
define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}



