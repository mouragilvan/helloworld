<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3acc2a6fdebec1dc0b0d57277ae9c632
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MouraGilvan\\Helloworld\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MouraGilvan\\Helloworld\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3acc2a6fdebec1dc0b0d57277ae9c632::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3acc2a6fdebec1dc0b0d57277ae9c632::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3acc2a6fdebec1dc0b0d57277ae9c632::$classMap;

        }, null, ClassLoader::class);
    }
}
