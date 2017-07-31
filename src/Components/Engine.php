<?php


namespace AdServer\Engine\Components;


use Psr\Container\ContainerInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Engine
{
    protected static $app;
    protected static $di;

    public static function run(
        Application $application
    )
    {
        self::$app = $application;
        self::$di = $application['di'];
        self::$app->run();
    }

    public static function getApp() : Application
    {
        return self::$app;
    }

    public static function getDI() : ContainerInterface
    {
        return self::$di;
    }
}