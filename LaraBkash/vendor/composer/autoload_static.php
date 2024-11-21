<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1a369f36f0bf17b74883599aa67c437
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rez1pro\\LaraBkash\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rez1pro\\LaraBkash\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1a369f36f0bf17b74883599aa67c437::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1a369f36f0bf17b74883599aa67c437::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1a369f36f0bf17b74883599aa67c437::$classMap;

        }, null, ClassLoader::class);
    }
}
