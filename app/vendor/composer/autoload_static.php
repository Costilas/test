<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1c8b56eb835ea5b7d8d01d951249edf
{
    public static $files = array (
        '603ce470d3b0980801c7a6185a3d6d53' => __DIR__ . '/..' . '/icanboogie/inflector/lib/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ICanBoogie\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ICanBoogie\\' => 
        array (
            0 => __DIR__ . '/..' . '/icanboogie/inflector/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1c8b56eb835ea5b7d8d01d951249edf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1c8b56eb835ea5b7d8d01d951249edf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1c8b56eb835ea5b7d8d01d951249edf::$classMap;

        }, null, ClassLoader::class);
    }
}