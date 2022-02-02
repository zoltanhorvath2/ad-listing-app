<?php

/* WEBSITE TITLE */

define('APP_NAME', 'Ad listing app');

/* DATABASE CREDENTIALS */

define('DB_HOST', 'localhost');
define('DB_TYPE', 'mysql');
define('DB_NAME', 'ad_listing_app');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

/* PROTOCOL TYPE */

define('PROTOCOL', 'http');

/* ROOT AND ASSET PATHS */

$path = str_replace("\\", "/", PROTOCOL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));

/* ERROR REPORTING */

define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}



