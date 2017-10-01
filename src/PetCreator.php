<?php

namespace Zelindm\PetCreator;

use Examples\Dogs;
use Illuminate\Support\Facades\Config;

class PetCreator
{
    public function make($name)
    {
        $conf = Config::get('objects.'.$name);

        if ($conf) {
            return new Dogs(7);
        }

        return 1;
    }
}