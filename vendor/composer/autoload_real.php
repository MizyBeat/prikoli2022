<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc2a14ca89a67158d7f8e8aac9217127
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

        spl_autoload_register(array('ComposerAutoloaderInitcc2a14ca89a67158d7f8e8aac9217127', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc2a14ca89a67158d7f8e8aac9217127', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc2a14ca89a67158d7f8e8aac9217127::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
