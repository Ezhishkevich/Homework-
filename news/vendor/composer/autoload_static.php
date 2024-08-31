<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92759638d8088a0fd4e8451a965b6060
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'news\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'news\\' => 
        array (
            0 => __DIR__ . '/../..' . '/news',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92759638d8088a0fd4e8451a965b6060::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92759638d8088a0fd4e8451a965b6060::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92759638d8088a0fd4e8451a965b6060::$classMap;

        }, null, ClassLoader::class);
    }
}
