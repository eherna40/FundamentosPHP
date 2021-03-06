<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e90c81f7131f9b940a95ae59f4020db
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e90c81f7131f9b940a95ae59f4020db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e90c81f7131f9b940a95ae59f4020db::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
