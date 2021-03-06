<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46c3079c5fab5e7c2074ed637564e1c7
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46c3079c5fab5e7c2074ed637564e1c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46c3079c5fab5e7c2074ed637564e1c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46c3079c5fab5e7c2074ed637564e1c7::$classMap;

        }, null, ClassLoader::class);
    }
}
