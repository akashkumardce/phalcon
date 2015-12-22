<?php

class MemcacheService {
    public $cache;
    public function __construct(){
        // Cache data for 2 days
        $frontCache = new \Phalcon\Cache\Frontend\Data(array(
           "lifetime" => 172800
        ));

        //Create the Cache setting memcached connection options
        $this->cache = new \Phalcon\Cache\Backend\Memcache($frontCache, array(
           'host' => 'localhost',
           'port' => 11211,
           'persistent' => false
        ));
    }
    
    public function set($key,$value){
        $this->cache->save($key, $value);
    }
    
    public function fet($key,$value){
        return $this->cache->get($key);
    }
}