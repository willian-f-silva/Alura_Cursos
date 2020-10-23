<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf09ebf3e9dca1a6e98bf93c7b637c39
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf09ebf3e9dca1a6e98bf93c7b637c39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf09ebf3e9dca1a6e98bf93c7b637c39::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}