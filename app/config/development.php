<?php
/**
* # Development.php
* Configuration file for **development** environment.
*
* Seme Framework support for another environment, such as:
*   - `development.php`
*   - `staging.php`
*   - `production.php`
*
* ## `$site`
* Site Base URL with http:// or https:// prefix and trailing slash
*
* ## `$method`
* URL parse method
*   - REQUEST_URI, suitable for Nginx
*   - PATH_INFO, suitable for XAMPP
*   - ORIG_PATH_INFO
*
* ## `$admin_secret_url`
* Admin Secret url for re-routing `admin` directory on controller into `$admin_secret_url` on request path
*
* ## `$cdn_url`
* Base CDN URL with http:// or https:// prefix and trailing slash, optional
*
* ## $db
* Database array configuration
* - host
* - user
* - pass, password
* - engine
* - charset
* - port
*
* ## `$saltkey`
* Salt key for session secret
*
* ## `$timezone`
* Default time zone
*
* ## `$core_prefix`
* Core class prefix, please fill this before load php class on `app/core/`
*
* ## `$core_controller`
* Core class name for controller (without prefix)
*
* ## `$core_model`
* Core class name for mode (without prefix)
*
* ## `$controller_main`
* Default Main Controller for application onboarding
*
* ## `$controller_404`
* Default Main Controller for handling error 404 not found
*   Not found on Seme Framework caused by Undefined method or class controller
*
* ## `$semevar`
* Custom configuration value(s) that can be put on `$semevar['keyname'] = {value}`, example:
*
* ```php
* $semevar['site_name'] = 'Seme Framework';
* ```
*
* on controller, you can load the value by implementing code like this
* ```php
* $this->config->semevar->site_name; //will contain "Seme Framework"
* ```
*
* @package Application\Configuration
* @version 4.0.3
*
* @since 4.0.0
*/

/**
* Site Base URL with http:// or https:// prefix and trailing slash
* @var string
*/
$site = "http://".$_SERVER['HTTP_HOST']."/";
/**
* URL parse method
*   - REQUEST_URI, suitable for Nginx
*   - PATH_INFO, suitable for XAMPP
*   - ORIG_PATH_INFO
* @var string
*/
$method = "PATH_INFO";//REQUEST_URI,PATH_INFO,ORIG_PATH_INFO,
/**
* Admin Secret re-routing
* this is alias for app/controller/admin/*
* @var string
*/
$admin_secret_url = 'admin';
/**
* Base URL with http:// or https:// prefix and trailing slash
* @var string
*/
$cdn_url = '';

/********************************/
/* == Database Configuration == */
/* Database connection information */
/* @var array of string */
/********************************/
$db['host']  = 'localhost';
$db['user']  = 'root';
$db['pass']  = '';
$db['name']  = 'seme_framework';
$db['port'] = '3306';
$db['charset'] = 'latin1';
$db['engine'] = 'mysqli';

/****************************/
/* == Session Configuration == */
/* @var string */
/****************************/
$saltkey = 's3mEFr4';

/********************************/
/* == Timezone Configuration == */
/* @var string */
/****************************/
$timezone = 'Asia/Jakarta';

/********************************/
/* == Core Configuration == */
/* register your core class, and put it on: */
/*   - app/core/ */
/* all var $core_* value in lower case string*/
/* @var string */
/****************************/
$core_prefix = 'ji_';
$core_controller = 'controller';
$core_model = '';

/********************************/
/* == Controller Configuration == */
/* register your onboarding (main) controller */
/*   - make sure dont add any traing slash in array key of routes */
/*   - all var $controller_* value in lower case string */
/*   - example $routes['produk/(:any)'] = 'produk/detail/index/$1' */
/*   - example example $routes['blog/id/(:num)/(:any)'] = 'blog/detail/index/$1/$2'' */
/* @var string */
/****************************/
$controller_main='home';
$controller_404='notfound';

/********************************/
/* == Controller Re-Routing Configuration == */
/* make sure dont add any traing slash in array key of routes */
/* @var array of string */
/****************************/
// $routes['produk/(:any)'] = 'produk/detail/index/$1';
// $routes['blog/id/(:num)/(:any)'] = 'blog/detail/index/$1/$2';


/********************************/
/* == Another Configuration == */
/* configuration are in array of string format */
/*  - as name value pair */
/*  - accessing value by $this->config->semevar->keyname in controller extended class */
/*  - accessing value by $this->config->semevar->keyname in model extended class */
/****************************/

//firebase messaging
$semevar['fcm'] = new stdClass();
$semevar['fcm']->version = '';
$semevar['fcm']->apiKey = '';
$semevar['fcm']->authDomain = '';
$semevar['fcm']->databaseURL = '';
$semevar['fcm']->projectId = '';
$semevar['fcm']->storageBucket = '';
$semevar['fcm']->messagingSenderId = '';
$semevar['fcm']->appId = '';

// example
$semevar['site_name'] = 'Seme Framework';
$semevar['email_from'] = 'noreply@thecloudalert.com';
$semevar['email_reply'] = 'hi@thecloudalert.com';
$semevar['app_name'] = 'Seme Framework';
$semevar['app_logo'] = 'Seme Framework';