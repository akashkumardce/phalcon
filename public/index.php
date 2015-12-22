<?php  use Phalcon\Mvc\Router;
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
require_once (ROOT . DS . 'config' . DS . 'ScConstants.php');
try {
   
    
   //Register an autoloader
   $loader = new \Phalcon\Loader();
   $loader->registerDirs(array(
       '../app/controllers/',
       '../app/models/',
       '../app/helper/',
       '../library/'
   ))->register();

   //Create a DI
   $di = new Phalcon\DI\FactoryDefault();
   require_once (ROOT . DS . 'config' . DS . 'index.php');



   //Setup a base URI so that all generated URIs include the "tutorial" folder
   $di->set('url', function(){
       $url = new \Phalcon\Mvc\Url();
       $url->setBaseUri(ScConstants::$BaseUrl);
       return $url;
   });
  
   //Setup the view component
   $di->set('view', function(){
       require_once (ROOT . DS . 'config' . DS . 'viewConfig.php');
       return $view;
   });



    $di->set('router', function(){
        require_once (ROOT . DS . 'config' . DS . 'route.php');
        return $router;
    });


   //Handle the request
   $application = new \Phalcon\Mvc\Application($di);

   echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}
