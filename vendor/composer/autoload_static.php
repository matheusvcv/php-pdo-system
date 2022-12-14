<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8013750b1cf929ce2ef761d8b8a67bf6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8013750b1cf929ce2ef761d8b8a67bf6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8013750b1cf929ce2ef761d8b8a67bf6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8013750b1cf929ce2ef761d8b8a67bf6::$classMap;

        }, null, ClassLoader::class);
    }
}
