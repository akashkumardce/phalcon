<?php

class ScConstants
{
    public static $ENVIRONMENT="DEVELOPMENT"; 
    public static $BaseUrl="/phalcon-test/";    
    public static $tableHostMapping = array("db" => array('articles')); 
    public static $masterSlaveMapping = array("db" => "dbSlave", "db1" => "dbSlave1");
}