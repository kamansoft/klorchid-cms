<?php

namespace Kamansoft\KlorchidCms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kamansoft\KlorchidCms\Skeleton\SkeletonClass
 */
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
