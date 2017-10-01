<?php

namespace Examples;

abstract class ObjectClass {
    protected $age;

    public function __construct(int $age)
    {
        $this->age = $age;
    }

    public function age() : int
    {
        return $this->age;
    }

    public function class() : string
    {
        return self::class;
    }
}