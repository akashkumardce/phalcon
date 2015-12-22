<?php

class UserController extends Controller {

   public function profileAction()    {
       //$this->assets->addCss('css/abc.css');
       $this->assets->collection('header')->addJs('js/common/hello.js');
       $this->assets->collection('footer')->addJs('js/common/hello.js');
      $article = Articles::findFirst(1);
      $this->view->string           = $article->getTitle();
   }

}
