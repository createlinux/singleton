<?php

namespace Createlinux\Singleton;

abstract class ClassManagerAbstract
{
    protected static $instance = [];

    protected static $classNamespace = '';

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

        if(!trim(static::$classNamespace)){
            throw new \Exception("static variable \$classNamespace required");
        }
        $logicClass = static::$classNamespace . $name;
        if (!isset(static::$instance[$logicClass])) {
            static::$instance[$logicClass] = new $logicClass(...$arguments);
        }

        return static::$instance[$logicClass];
    }
}
