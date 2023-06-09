<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit59ce77a2202ef7640fb85d43a75657ba
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit59ce77a2202ef7640fb85d43a75657ba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit59ce77a2202ef7640fb85d43a75657ba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit59ce77a2202ef7640fb85d43a75657ba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
