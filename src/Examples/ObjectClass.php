<?php

namespace Zelindm\Test;

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
}