<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee3e8bdd001ede58f5b50476646dd5b5
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rashidfarif\\SimplePhpCrud\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rashidfarif\\SimplePhpCrud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee3e8bdd001ede58f5b50476646dd5b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee3e8bdd001ede58f5b50476646dd5b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee3e8bdd001ede58f5b50476646dd5b5::$classMap;

        }, null, ClassLoader::class);
    }
}