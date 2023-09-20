<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b68c599777387756dae68a8bde505ca
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'test\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b68c599777387756dae68a8bde505ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b68c599777387756dae68a8bde505ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b68c599777387756dae68a8bde505ca::$classMap;

        }, null, ClassLoader::class);
    }
}
