<?php

namespace Kamansoft\KlorchidCms\Facades;

use Illuminate\Support\Facades\Facade;
use Kamansoft\KlorchidCms\KlorchidCms;


class KlorchidCmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'klorchid-cms';
    }
}
