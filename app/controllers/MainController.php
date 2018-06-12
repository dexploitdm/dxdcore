<?php

namespace app\controllers;
use dxdcore\App;
use dxdcore\Cache;

class MainController extends AppController {
    
    public function indexAction(){
        $posts = \R::findAll('test');
        $this->setMeta(App::$app->getProperty('name'),'Framework','web development');
        $name = 'Dexploitdm';

        $cache = Cache::instance();
        //$cache->set('test', $name);
        $cache->delete('test');
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $name);
        }
        debug($data);

        $this->set(compact('name', 'posts'));
    }
}