<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8db6c8cc41105587e395c763776ccf18
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'S' => 
        array (
            'SayHello\\Plugin\\Icon\\' => 21,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'SayHello\\Plugin\\Icon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8db6c8cc41105587e395c763776ccf18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8db6c8cc41105587e395c763776ccf18::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
