<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0afeb9ade56a41cc387bf8a8ef59f6e
{
    public static $files = array (
        '34901568a1e26d13dd475cb2c85e0284' => __DIR__ . '/..' . '/zendframework/zend-form/autoload/formElementManagerPolyfill.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\View\\' => 10,
            'Zend\\Validator\\' => 15,
            'Zend\\Uri\\' => 9,
            'Zend\\Stdlib\\' => 12,
            'Zend\\Soap\\' => 10,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Server\\' => 12,
            'Zend\\Router\\' => 12,
            'Zend\\Mvc\\' => 9,
            'Zend\\ModuleManager\\' => 19,
            'Zend\\Loader\\' => 12,
            'Zend\\InputFilter\\' => 17,
            'Zend\\I18n\\' => 10,
            'Zend\\Hydrator\\' => 14,
            'Zend\\Http\\' => 10,
            'Zend\\Form\\' => 10,
            'Zend\\Filter\\' => 12,
            'Zend\\EventManager\\' => 18,
            'Zend\\Escaper\\' => 13,
            'Zend\\Db\\' => 8,
            'Zend\\Config\\' => 12,
            'Zend\\ComponentInstaller\\' => 24,
            'Zend\\Code\\' => 10,
            'ZF\\DevelopmentMode\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'C' => 
        array (
            'CVMWeb\\' => 7,
        ),
        'A' => 
        array (
            'Application\\' => 12,
            'ApplicationTest\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-view/src',
        ),
        'Zend\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-validator/src',
        ),
        'Zend\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-uri/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Soap\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-soap/src',
            1 => __DIR__ . '/..' . '/zendframework/zend-soap/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-server/src',
        ),
        'Zend\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-router/src',
        ),
        'Zend\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mvc/src',
        ),
        'Zend\\ModuleManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-modulemanager/src',
        ),
        'Zend\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-loader/src',
        ),
        'Zend\\InputFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-inputfilter/src',
        ),
        'Zend\\I18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-i18n/src',
        ),
        'Zend\\Hydrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-hydrator/src',
        ),
        'Zend\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-http/src',
        ),
        'Zend\\Form\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-form/src',
        ),
        'Zend\\Filter\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-filter/src',
        ),
        'Zend\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-eventmanager/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-db/src',
        ),
        'Zend\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-config/src',
        ),
        'Zend\\ComponentInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-component-installer/src',
        ),
        'Zend\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-code/src',
        ),
        'ZF\\DevelopmentMode\\' => 
        array (
            0 => __DIR__ . '/..' . '/zfcampus/zf-development-mode/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'CVMWeb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/CVMWeb/src',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/src',
        ),
        'ApplicationTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/test',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0afeb9ade56a41cc387bf8a8ef59f6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0afeb9ade56a41cc387bf8a8ef59f6e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
