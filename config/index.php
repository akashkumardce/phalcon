<?php


if (ScConstants::$ENVIRONMENT == "DEVELOPMENT") {
    error_reporting(E_ALL);
    ini_set('display_errors','On');
    ini_set('log_errors', 'On');
    ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors','Off');
    ini_set('log_errors', 'On');
    ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
}


require_once (ROOT . DS . 'config' . DS . 'dbConnection.php');
//require_once (ROOT . DS . 'config' . DS . 'viewConfig.php');
//require_once (ROOT . DS . 'config' . DS . 'route.php');