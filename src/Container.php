<?php

namespace Abelesense\Corepackage;


class Container
{
    private array $services = [];

    public function get(string $class): object
    {
        if (isset($this->services[$class])) {
            $callback = $this->services[$class];
            $obj = $callback($this);
        } else {
            $obj = new $class();
        }
        return $obj;
    }

    public function set(string $class, callable $callback)
    {
        $this->services[$class] = $callback;
    }

}