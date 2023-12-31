<?php
session_start();

define('SITE_PATH', realpath(dirname(__FILE__)) . '/');


/*Require necessary files.*/
require_once(SITE_PATH . 'configs/routes.php');
require_once(SITE_PATH . 'configs/database.php');
require_once(SITE_PATH . 'application/Request.php');
require_once(SITE_PATH . 'application/Router.php');
require_once(SITE_PATH . 'application/BaseController.php');
require_once(SITE_PATH . 'application/BaseModel.php');
require_once(SITE_PATH . 'application/Load.php');
require_once(SITE_PATH . 'application/Registry.php');
require_once(SITE_PATH . 'application/Utils.php');
require_once(SITE_PATH . 'controllers/ErrorController.php');

/*Initial setup.*/
include_once(SITE_PATH . 'MySQLDB.php');

try {
	Router::route(new Request);
} catch (Exception $e) {
	$controller = new errorController;
	$controller->error($e->getMessage());
}
