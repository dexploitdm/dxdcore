<?php

namespace app\controllers;
use dxdcore\App;

class MainController extends AppController {
    
    public function indexAction(){
        $this->setMeta(App::$app->getProperty('name'),'Framework','web development');
        $name = 'Dexploitdm';
        $this->set(compact('name'));
    }
}