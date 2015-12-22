<?php

class ApplicationController extends \Phalcon\Mvc\Controller {
    function onConstruct() {
       
       $this->view->commonLayout = '21';
    }
}
