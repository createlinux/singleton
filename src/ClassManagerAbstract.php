<?php

namespace Createlinux\Singleton;

abstract class ClassManagerAbstract
{
    protected static $instance = [];

    abstract protected static function getClassPath(): string;

    private function __construct()
    {
    }

    public function __wakeup()
    {

    }

    private function __clone()
    {

    }

    public function __invoke()
    {

    }

    /**
     * @param $name
     * @param $arguments
     * @return null
     * @throws \Exception
     */
    final public static function __callStatic($name, $arguments)
    {
        if(!method_exists(static::class,'getClassPath')){
            throw new \Exception("getClassPath not exists");
        }
        $logicClass = static::getClassPath() . $name;
        if (!isset(static::$instance[$logicClass])) {
            static::$instance[$logicClass] = new $logicClass(...$arguments);
        }

        return static::$instance[$logicClass];
    }
}
