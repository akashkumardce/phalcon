<?php

$di->set('db', function() {
    return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "192.168.20.251",
        "username" => "production",
        "password" => "Pr0DucT!0N",
        "dbname" => "shopclue_cart"
    ));
});

$di->set('dbSlave', function() {
    return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "192.168.20.251",
        "username" => "production",
        "password" => "Pr0DucT!0N",
        "dbname" => "shopclue_cart"
    ));
});

//This service returns a MySQL database
$di->set('db1', function() {
    return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "192.168.20.163",
        "username" => "production",
        "password" => "Pr0D#c@qa",
        "dbname" => "shopclue_cart"
    ));
});

$di->set('dbSlave1', function() {
    return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "192.168.20.163",
        "username" => "production",
        "password" => "Pr0D#c@qa",
        "dbname" => "shopclue_cart"
    ));
});