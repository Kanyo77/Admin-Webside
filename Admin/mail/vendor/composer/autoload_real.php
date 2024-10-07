<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcb80f30da6b45a7b2e877851bd9d5a98
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitcb80f30da6b45a7b2e877851bd9d5a98', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcb80f30da6b45a7b2e877851bd9d5a98', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcb80f30da6b45a7b2e877851bd9d5a98::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}