<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda35518cdeacf6136f1866d1876b93bf
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda35518cdeacf6136f1866d1876b93bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda35518cdeacf6136f1866d1876b93bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}