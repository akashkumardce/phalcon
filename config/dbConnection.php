<?php

 $di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "akash",
            "dbname" => "shopclues"
        ));
    });
    
    //This service returns a MySQL database
$di->set('dbSlave', function() {
     return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => "localhost",
        "username" => "root",
        "password" => "akash",
        "dbname" => "shopclues"
    ));
});

