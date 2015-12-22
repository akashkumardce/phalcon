<?php

class IndexController extends ApplicationController {

   public function indexAction()    {
       $this->assets->collection('header')->addJs('public/js/common/hello.js');
       //$this->assets->collection('footer')->addJs('js/common/hel.js');
       $di = new Phalcon\DI\FactoryDefault();
     $article = Articles::findFirst(1);
     
     $v = new MemcacheService();
     
     $var =  $v->get("a");
     echo "a";print_r($var);die;
     //$this->view->sharedVAr = '1';
      $this->view->string           = $article->getTitle();
   }

}
