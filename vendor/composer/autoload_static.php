<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaff75fd327a83cfb7f65963aaacb2700
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rmunate\\SqlServerLite\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rmunate\\SqlServerLite\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaff75fd327a83cfb7f65963aaacb2700::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaff75fd327a83cfb7f65963aaacb2700::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaff75fd327a83cfb7f65963aaacb2700::$classMap;

        }, null, ClassLoader::class);
    }
}