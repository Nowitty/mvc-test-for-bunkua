<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dbf280dc818299821b6738726c275b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dbf280dc818299821b6738726c275b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dbf280dc818299821b6738726c275b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
