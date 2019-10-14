<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ce3473e57d64bcd7adc4ed1a474349d
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hillel\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hillel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ce3473e57d64bcd7adc4ed1a474349d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ce3473e57d64bcd7adc4ed1a474349d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}