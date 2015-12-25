<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit62d424f77b586148730ea366cd43c7fa
=======
class ComposerAutoloaderInit44812de2754190f42d4aaa3e36412511
>>>>>>> origin/master
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

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit62d424f77b586148730ea366cd43c7fa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit62d424f77b586148730ea366cd43c7fa', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit44812de2754190f42d4aaa3e36412511', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit44812de2754190f42d4aaa3e36412511', 'loadClassLoader'));
>>>>>>> origin/master

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
<<<<<<< HEAD
        foreach ($includeFiles as $file) {
            composerRequire62d424f77b586148730ea366cd43c7fa($file);
=======
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire44812de2754190f42d4aaa3e36412511($fileIdentifier, $file);
>>>>>>> origin/master
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire62d424f77b586148730ea366cd43c7fa($file)
{
    require $file;
=======
function composerRequire44812de2754190f42d4aaa3e36412511($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
>>>>>>> origin/master
}
