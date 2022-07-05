<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9e654fe571cb32e16053b3a0fc9d66b
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ina\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ina\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9e654fe571cb32e16053b3a0fc9d66b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9e654fe571cb32e16053b3a0fc9d66b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9e654fe571cb32e16053b3a0fc9d66b::$classMap;

        }, null, ClassLoader::class);
    }
}