<?php

$router = new \Phalcon\Mvc\Router(false);

$router->add("/:controller/:action", array(        
    'controller' => 1,
    'action' => 2,
));

$router->add("/", array(       
    'controller' => 'index',
    'action' => 'index',
));

//Set 404 paths
$router->notFound(array(
    "controller" => "notfound",
    "action" => "index"
));

return $router;