<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92b65af37b576b10ec341ba3241cf859
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZxcvbnPhp\\' => 10,
        ),
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'L' => 
        array (
            'Login\\Sandro\\' => 13,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZxcvbnPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjeavons/zxcvbn-php/src',
        ),
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../traits',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../models',
        ),
        'Login\\Sandro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92b65af37b576b10ec341ba3241cf859::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92b65af37b576b10ec341ba3241cf859::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92b65af37b576b10ec341ba3241cf859::$classMap;

        }, null, ClassLoader::class);
    }
}
