<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb283c47493e40aca9599a53091410786
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Woo\\Faq\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Woo\\Faq\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb283c47493e40aca9599a53091410786::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb283c47493e40aca9599a53091410786::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb283c47493e40aca9599a53091410786::$classMap;

        }, null, ClassLoader::class);
    }
}
