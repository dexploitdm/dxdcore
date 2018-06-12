<?php

namespace dxdcore\base;
use dxdcore\Db;

abstract class Model {

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        Db::instance();
    }

}