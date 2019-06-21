<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb99ff5595266bec75d787ff7a3a2248b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Biblioteca\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Biblioteca\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Biblioteca',
        ),
    );

    public static $classMap = array (
        'Biblioteca\\Area' => __DIR__ . '/../..' . '/Biblioteca/area.php',
        'Biblioteca\\Domainobject' => __DIR__ . '/../..' . '/Biblioteca/domainobject.php',
        'Biblioteca\\Publicacao' => __DIR__ . '/../..' . '/Biblioteca/publicacao.php',
        'Biblioteca\\Revista' => __DIR__ . '/../..' . '/Biblioteca/revista.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb99ff5595266bec75d787ff7a3a2248b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb99ff5595266bec75d787ff7a3a2248b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb99ff5595266bec75d787ff7a3a2248b::$classMap;

        }, null, ClassLoader::class);
    }
}