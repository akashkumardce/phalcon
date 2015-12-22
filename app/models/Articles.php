<?php

class Articles extends BaseModel 
{    
    public $id;
    public $title;
    public $body;    

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getBody() {
        return $this->body;
    }
    
    public function getSource11() {
        return 'articles';
    }
}