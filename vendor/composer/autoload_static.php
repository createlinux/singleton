<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13fae0947dd1a73e9240e66324e3e748
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Createlinux\\Singleton\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Createlinux\\Singleton\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit13fae0947dd1a73e9240e66324e3e748::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13fae0947dd1a73e9240e66324e3e748::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13fae0947dd1a73e9240e66324e3e748::$classMap;

        }, null, ClassLoader::class);
    }
}