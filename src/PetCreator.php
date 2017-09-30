<?php

namespace Zelindm\PetCreator;

use Illuminate\Support\Facades\Config;

class PetCreator
{
    public function make(){
        $g = Config::get('objects');
        var_dump($g);exit();

        return 1;
    }
}