<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb80f30da6b45a7b2e877851bd9d5a98
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb80f30da6b45a7b2e877851bd9d5a98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb80f30da6b45a7b2e877851bd9d5a98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb80f30da6b45a7b2e877851bd9d5a98::$classMap;

        }, null, ClassLoader::class);
    }
}
