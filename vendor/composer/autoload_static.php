<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59ed623e78217077f840c5fd5403b073
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '0e423a14e27410a071e5d815d3ffc856' => __DIR__ . '/..' . '/larapack/dd/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'D' => 
        array (
            'Database\\Seeders\\' => 17,
            'Database\\Factories\\' => 19,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/pint/database/seeders',
        ),
        'Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/pint/database/factories',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
            1 => __DIR__ . '/..' . '/laravel/pint/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59ed623e78217077f840c5fd5403b073::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59ed623e78217077f840c5fd5403b073::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59ed623e78217077f840c5fd5403b073::$classMap;

        }, null, ClassLoader::class);
    }
}
