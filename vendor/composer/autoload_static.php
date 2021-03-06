<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;


class ComposerStaticInit6908510312e7a961b3afad3043d5a79c

{
    public static $files = array (
        '9f2ca8d9a238e4c80d25576e2bfa4cb3' => __DIR__ . '/../..' . '/Modules/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Modules',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {

            $loader->prefixLengthsPsr4 = ComposerStaticInit6908510312e7a961b3afad3043d5a79c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6908510312e7a961b3afad3043d5a79c::$prefixDirsPsr4;


        }, null, ClassLoader::class);
    }
}
