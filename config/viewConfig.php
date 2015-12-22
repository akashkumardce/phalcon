<?php

   $view = new \Phalcon\Mvc\View();
       $view->setViewsDir('../app/views/');
       $view->setLayout('user');
       $view->registerEngines(
        array(
            ".phtml" => 'Phalcon\Mvc\View\Engine\Volt'
        )
    );