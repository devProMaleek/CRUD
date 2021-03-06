<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc2293ac2b49677aca8da95637211450
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc2293ac2b49677aca8da95637211450::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc2293ac2b49677aca8da95637211450::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc2293ac2b49677aca8da95637211450::$classMap;

        }, null, ClassLoader::class);
    }
}
