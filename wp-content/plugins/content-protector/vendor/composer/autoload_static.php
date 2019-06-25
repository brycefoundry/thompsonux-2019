<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit603805fd2528b1000bf0972a1a2ac3b3
{
    public static $files = array (
        'cc8d59a8dda14e785c7d690948b39a8a' => __DIR__ . '/../..' . '/src/class-ps-settings.php',
        '14d2a699c726e4fbe775cc60e7e894c0' => __DIR__ . '/../..' . '/src/class-ps-admin.php',
        'd847655e6295c5afca8233125d106ade' => __DIR__ . '/../..' . '/src/class-ps-activation.php',
        '239af737eab677254992a456a278b4eb' => __DIR__ . '/../..' . '/src/class-ps-helper.php',
        '4b06433746c8c2df81e6ca8c8e873334' => __DIR__ . '/../..' . '/src/class-ps-shortcode.php',
        '28a02cc48532ed4117e126fc6a426a97' => __DIR__ . '/../..' . '/src/class-ps-form.php',
        '7f554902177b142825cdc640d62e668f' => __DIR__ . '/../..' . '/src/class-ps-customizer.php',
        '4be822b5b5ec544fa43e14e4569a59cb' => __DIR__ . '/../..' . '/src/addons/class-ps-captcha.php',
        '5c527ff9695b5d79cdc69c44ec519e1e' => __DIR__ . '/../..' . '/src/addons/class-ps-link.php',
        'e631eef03c37526417646ab5451a272d' => __DIR__ . '/../..' . '/src/sessions/SessionHandler.php',
        'de888ca204634179c292ff9248d1cc0e' => __DIR__ . '/../..' . '/src/sessions/DatabaseHandler.php',
        '07a1260d51a6d85f38930add704623bc' => __DIR__ . '/../..' . '/src/sessions/Option.php',
        'b2a1411102970bc1c186c2b66635a9d3' => __DIR__ . '/../..' . '/src/sessions/OptionsHandler.php',
        '9000d5d4cbccc419b6863b264542c245' => __DIR__ . '/../..' . '/src/class-ps-session.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
        'E' => 
        array (
            'EAMann\\Sessionz\\' => 16,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
        'EAMann\\Sessionz\\' => 
        array (
            0 => __DIR__ . '/..' . '/ericmann/sessionz/php',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phpass' => 
            array (
                0 => __DIR__ . '/..' . '/rych/phpass/library',
            ),
        ),
        'C' => 
        array (
            'Captcha' => 
            array (
                0 => __DIR__ . '/..' . '/recaptcha/php5/Package',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit603805fd2528b1000bf0972a1a2ac3b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit603805fd2528b1000bf0972a1a2ac3b3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit603805fd2528b1000bf0972a1a2ac3b3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}