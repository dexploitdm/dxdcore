<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf21157e2e037900dcf28878426a898a
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dxdcore\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dxdcore\\' => 
        array (
            0 => __DIR__ . '/..' . '/dxdcore/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf21157e2e037900dcf28878426a898a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf21157e2e037900dcf28878426a898a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
