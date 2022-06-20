<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe4f6225ff31ea1d72ecbfd4bf42bfb1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MintPackages\\Trash\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MintPackages\\Trash\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe4f6225ff31ea1d72ecbfd4bf42bfb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe4f6225ff31ea1d72ecbfd4bf42bfb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe4f6225ff31ea1d72ecbfd4bf42bfb1::$classMap;

        }, null, ClassLoader::class);
    }
}
