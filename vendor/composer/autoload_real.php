<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInitdab8f896e7485f6c180702c4ac8ed998
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitdab8f896e7485f6c180702c4ac8ed998', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitdab8f896e7485f6c180702c4ac8ed998', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname($vendorDir);

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->add($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        require $vendorDir . '/ircmaxell/password-compat/lib/password.php';
        require $vendorDir . '/swiftmailer/swiftmailer/lib/swift_required.php';
        require $vendorDir . '/laravel/framework/src/Illuminate/Support/helpers.php';
        require $vendorDir . '/kriswallsmith/assetic/src/functions.php';
        require $vendorDir . '/jasonlewis/basset/src/helpers.php';

        return $loader;
    }
}