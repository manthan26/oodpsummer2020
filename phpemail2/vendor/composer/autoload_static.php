<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd75241dc346205cb9d8430ee6a6cd894
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd75241dc346205cb9d8430ee6a6cd894::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd75241dc346205cb9d8430ee6a6cd894::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
