<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54a0ed36216cec978c4fe05307b85b7c
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54a0ed36216cec978c4fe05307b85b7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54a0ed36216cec978c4fe05307b85b7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54a0ed36216cec978c4fe05307b85b7c::$classMap;

        }, null, ClassLoader::class);
    }
}
