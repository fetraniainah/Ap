<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc808f519873c735de4f5da478a20a4ba
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'A' => 
        array (
            'App\\Routes\\' => 11,
            'App\\RenderViews\\' => 16,
            'App\\PathError\\' => 14,
            'App\\Model\\' => 10,
            'App\\Controller\\' => 15,
            'App\\Config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'App\\Routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
        'App\\RenderViews\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
        'App\\PathError\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
        'App\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc808f519873c735de4f5da478a20a4ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc808f519873c735de4f5da478a20a4ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc808f519873c735de4f5da478a20a4ba::$classMap;

        }, null, ClassLoader::class);
    }
}
