<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8b2bc51f6aae0ada0f7b013f6a72a17
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clockwork\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clockwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/itsgoingd/clockwork/Clockwork',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8b2bc51f6aae0ada0f7b013f6a72a17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8b2bc51f6aae0ada0f7b013f6a72a17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8b2bc51f6aae0ada0f7b013f6a72a17::$classMap;

        }, null, ClassLoader::class);
    }
}