<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaxMind\\Db\\' => 11,
        ),
        'K' => 
        array (
            'Kirby\\Buy\\' => 10,
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
        'Kirby\\Buy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\Buy\\Paddle' => __DIR__ . '/../..' . '/src/Paddle.php',
        'Kirby\\Buy\\Passthrough' => __DIR__ . '/../..' . '/src/Passthrough.php',
        'Kirby\\Buy\\Price' => __DIR__ . '/../..' . '/src/Price.php',
        'Kirby\\Buy\\Product' => __DIR__ . '/../..' . '/src/Product.php',
        'Kirby\\Buy\\RevenueLimit' => __DIR__ . '/../..' . '/src/RevenueLimit.php',
        'Kirby\\Buy\\Sale' => __DIR__ . '/../..' . '/src/Sale.php',
        'Kirby\\Buy\\Upgrade' => __DIR__ . '/../..' . '/src/Upgrade.php',
        'Kirby\\Buy\\Visitor' => __DIR__ . '/../..' . '/src/Visitor.php',
        'MaxMind\\Db\\Reader' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader.php',
        'MaxMind\\Db\\Reader\\Decoder' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Decoder.php',
        'MaxMind\\Db\\Reader\\InvalidDatabaseException' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/InvalidDatabaseException.php',
        'MaxMind\\Db\\Reader\\Metadata' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Metadata.php',
        'MaxMind\\Db\\Reader\\Util' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Util.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27::$classMap;

        }, null, ClassLoader::class);
    }
}
