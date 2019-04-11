<?php

// autoload_real.php @generated by Composer
namespace Composer\Autoload;
class ComposerAutoloaderInit3b6f58ae51920ebef1a3fc22a952ae98
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
        $class_arr = array();

        spl_autoload_register(array('ComposerAutoloaderInit3b6f58ae51920ebef1a3fc22a952ae98', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit3b6f58ae51920ebef1a3fc22a952ae98', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInit3b6f58ae51920ebef1a3fc22a952ae98::getInitializer($loader));
        } else {
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
        }

        $loader->register(true);

        if ($useStaticLoader) {
            $includeFiles = Composer\Autoload\ComposerStaticInit3b6f58ae51920ebef1a3fc22a952ae98::$files;
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
            if(empty($class_arr[$fileIdentifier]) || $class_arr[$fileIdentifier] != true){
                $class_arr[$fileIdentifier = true;
                composerRequire3b6f58ae51920ebef1a3fc22a952ae98($fileIdentifier, $file);
            }
        }

        return $loader;
    }
}

function composerRequire3b6f58ae51920ebef1a3fc22a952ae98($fileIdentifier, $file)
{
   
        require $file;

      
   
}
