<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c75cc585a6c7abcd470b8e15b5f08a4
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Overtrue\\Pinyin\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Overtrue\\Pinyin\\' => 
        array (
            0 => __DIR__ . '/..' . '/overtrue/pinyin/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c75cc585a6c7abcd470b8e15b5f08a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c75cc585a6c7abcd470b8e15b5f08a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
