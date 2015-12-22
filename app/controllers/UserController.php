<?php

class UserController extends ApplicationController {

   public function profileAction()    {
      $article = Articles::findFirst(1);
      $this->view->string           = $article->getTitle();
   }

}
