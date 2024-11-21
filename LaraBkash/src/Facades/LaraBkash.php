<?php

namespace Rez1pro\LaraBkash\Facades;

use Illuminate\Support\Facades\Facade;

class LaraBkash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rez1pro\LaraBkash\Core\Index::class;
    }
}
