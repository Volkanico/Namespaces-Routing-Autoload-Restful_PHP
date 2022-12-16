<?php 
namespace controller;



//require_once '../config/config.php';
//require_once '../model/db.php';

if(!isset($_GET["controller"])) $_GET["controller"] = constant("DEFAULT_CONTROLLER");
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

$controller_path = 'controller/'.$_GET["controller"].'.php';

/* Check if controller exists */
if(!file_exists($controller_path)) $controller_path = '../controller/'.constant("DEFAULT_CONTROLLER").'Controller.php';

/* Load controller */
require_once $controller_path;
$controllerName = $_GET["controller"].'Controller';
var_dump($controllerName);
$controller = new $controllerName();

/* Check if method is defined */
$dataToView["data"] = array();
if(method_exists($controller,$_GET["action"])) $dataToView["data"] = $controller->{$_GET["action"]}();


/* Load views */

require_once '../view/'.$controller->view.'.php';

//var_dump($dataToView);
//var_dump($_GET["action"]);
//var_dump($controllerName);
?>