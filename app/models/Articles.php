<?php

class Articles extends \Phalcon\Mvc\Model {

    public function initialize($dbName='')
    {
        $dbName = $dbName!=''?$dbName:ScConstants::$dbConfig["master"];
        //print_r($dbName);die;
        $this->setConnectionService($dbName);
    }
public $id;

public $title;

public $body;
public function getId()    {
    return $this->id;
}

public function getTitle()    {
    return $this->title;
}

public function getBody()    {
    return $this->body;
}
public function afterQuery()
    {
echo "aaaaaaaaa";
    }
}