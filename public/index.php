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
       '../app/library/',
       '../library/'
   ))->register();

   //Create a DI
   $di = new Phalcon\DI\FactoryDefault();
   require_once (ROOT . DS . 'config' . DS . 'index.php');

$di->setShared('sharedVAr', function(){ return 41; });

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
   $di->setShared('assets', 'Phalcon\Assets\Manager');
       $di['assets']->collection('css')
       ->addCss('css/style.css');
       $di['assets']->collection('footer')->setTargetPath('js/common/final.js')
       ->addJs('js/common/hel.js')->addJs('js/common/jquery.js')->join(true)->addFilter(new Phalcon\Assets\Filters\Jsmin());;
   $di->set('voltService', function ($view, $di) {

    $volt = new Volt($view, $di);

    $volt->setOptions(
        array(
            "compiledPath"      => "../app/compiled-templates/",
            "compiledExtension" => ".compiled"
        )
    );

    return $volt;
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
