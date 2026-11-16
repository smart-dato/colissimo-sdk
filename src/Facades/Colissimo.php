<?php

namespace SmartDato\ColissimoSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmartDato\ColissimoSdk\Colissimo
 */
class Colissimo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmartDato\ColissimoSdk\Colissimo::class;
    }
}
