<?php

   $view = new \Phalcon\Mvc\View();
       $view->setViewsDir('../app/views/');
       $view->setLayout('user');
       $view->registerEngines(array(
      ".phtml" => function($view, $di) {
           $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
           $volt->setOptions(array(
                "compiledPath" => "../cache/volt/"
           ));
           return $volt;
    }
));