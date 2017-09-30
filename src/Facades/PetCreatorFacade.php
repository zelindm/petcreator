<?php

namespace Zelindm\PetCreator\Facades;

use Illuminate\Support\Facades\Facade;

class PetCreatorFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'petcreator';
    }
}