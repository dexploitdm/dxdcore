<?php

namespace dxdcore;

trait Tsingletone {
    
    private static $instance;

    public static function instance() {
        //Если пусто то положим обьект
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

}