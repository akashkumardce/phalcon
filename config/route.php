<?php

$router = new \Phalcon\Mvc\Router(false);

$router->add("/:controler/:action", array(        
    'controller' => 1,
    'action' => 2,
));

$router->add("/", array(       
    'controller' => 'index',
    'action' => 'index',
));


$router->add("/products/:action", array(        
    'controller' => 'products',
    'action' => 1,
));

//Set 404 paths
$router->notFound(array(
    "controller" => "notfound",
    "action" => "index"
));

return $router;