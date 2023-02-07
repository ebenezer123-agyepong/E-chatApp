<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb60ef4a1d06120b9b951bbd7581f33fa
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

        spl_autoload_register(array('ComposerAutoloaderInitb60ef4a1d06120b9b951bbd7581f33fa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb60ef4a1d06120b9b951bbd7581f33fa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb60ef4a1d06120b9b951bbd7581f33fa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}