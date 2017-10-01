<?php

namespace Zelindm\PetCreator;

use Illuminate\Support\Facades\Config;


class PetCreator
{
    public function make($name)
    {
        $conf = Config::get('objects.'.$name);
        $age = array_get($conf, 'age');
        $className = array_get($conf, 'class');

        if ($conf && $age && $className) {
            $obj = new $className($age);

            if(is_subclass_of($obj, 'Examples\ObjectClass')){
                return $obj;
            }
        }

        throw new ObjectsMakeException();
    }
}