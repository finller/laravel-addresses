<?php

namespace Finller\Address\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Finller\Address\Address
 */
class Address extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Finller\Address\Address::class;
    }
}
