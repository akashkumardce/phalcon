<?php

class ApplicationController extends \Phalcon\Mvc\Controller {
    function onConstruct() {
       
       $layoutDataObj = new LayoutData();
       $layoutData = $layoutDataObj->getLayoutData();
       $this->view->layout = $layoutData;
    }
}
