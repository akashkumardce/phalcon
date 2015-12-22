<?php

class IndexController extends ApplicationController {

   public function indexAction()    {
      $article = Articles::findFirst(1, "slave");
      $this->view->string           = $article->getTitle();
      
   }

}
