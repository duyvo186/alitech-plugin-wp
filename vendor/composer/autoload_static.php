<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c08dc1fd396cd2452423e9d26cd48bf
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Inc\\Api\\Callbacks\\AdminCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/AdminCallbacks.php',
        'Inc\\Api\\Callbacks\\CptCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/CptCallbacks.php',
        'Inc\\Api\\Callbacks\\ManagerCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/ManagerCallbacks.php',
        'Inc\\Api\\Callbacks\\TaxonomyCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/TaxonomyCallbacks.php',
        'Inc\\Api\\Callbacks\\TestimonialCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/TestimonialCallbacks.php',
        'Inc\\Api\\SettingsApi' => __DIR__ . '/../..' . '/inc/Api/SettingsApi.php',
        'Inc\\Api\\Widgets\\MediaWidget' => __DIR__ . '/../..' . '/inc/Api/Widgets/MediaWidget.php',
        'Inc\\Base\\Activate' => __DIR__ . '/../..' . '/inc/Base/Activate.php',
        'Inc\\Base\\AuthController' => __DIR__ . '/../..' . '/inc/Base/AuthController.php',
        'Inc\\Base\\BaseController' => __DIR__ . '/../..' . '/inc/Base/BaseController.php',
        'Inc\\Base\\ChatController' => __DIR__ . '/../..' . '/inc/Base/ChatController.php',
        'Inc\\Base\\CustomPostTypeController' => __DIR__ . '/../..' . '/inc/Base/CustomPostTypeController.php',
        'Inc\\Base\\CustomTaxonomyController' => __DIR__ . '/../..' . '/inc/Base/CustomTaxonomyController.php',
        'Inc\\Base\\Deactivate' => __DIR__ . '/../..' . '/inc/Base/Deactivate.php',
        'Inc\\Base\\Enqueue' => __DIR__ . '/../..' . '/inc/Base/Enqueue.php',
        'Inc\\Base\\GalleryController' => __DIR__ . '/../..' . '/inc/Base/GalleryController.php',
        'Inc\\Base\\MembershipController' => __DIR__ . '/../..' . '/inc/Base/MembershipController.php',
        'Inc\\Base\\SettingsLinks' => __DIR__ . '/../..' . '/inc/Base/SettingsLinks.php',
        'Inc\\Base\\TemplateController' => __DIR__ . '/../..' . '/inc/Base/TemplateController.php',
        'Inc\\Base\\TestimonialController' => __DIR__ . '/../..' . '/inc/Base/TestimonialController.php',
        'Inc\\Base\\WidgetController' => __DIR__ . '/../..' . '/inc/Base/WidgetController.php',
        'Inc\\Init' => __DIR__ . '/../..' . '/inc/Init.php',
        'Inc\\Pages\\Dashboard' => __DIR__ . '/../..' . '/inc/Pages/Dashboard.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c08dc1fd396cd2452423e9d26cd48bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c08dc1fd396cd2452423e9d26cd48bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c08dc1fd396cd2452423e9d26cd48bf::$classMap;

        }, null, ClassLoader::class);
    }
}