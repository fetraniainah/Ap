<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'App\\Routes\\' => array($baseDir . '/app/config'),
    'App\\RenderViews\\' => array($baseDir . '/app/config'),
    'App\\PathError\\' => array($baseDir . '/app/config'),
    'App\\Model\\' => array($baseDir . '/app/model'),
    'App\\Controller\\' => array($baseDir . '/app/controller'),
    'App\\Config\\' => array($baseDir . '/app/config'),
);
