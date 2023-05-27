<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59ce77a2202ef7640fb85d43a75657ba
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Energetica\\Composer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Energetica\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit59ce77a2202ef7640fb85d43a75657ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59ce77a2202ef7640fb85d43a75657ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59ce77a2202ef7640fb85d43a75657ba::$classMap;

        }, null, ClassLoader::class);
    }
}
