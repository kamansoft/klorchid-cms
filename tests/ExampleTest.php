<?php

namespace Kamansoft\KlorchidCms\Tests;

use Orchestra\Testbench\TestCase;
use Kamansoft\KlorchidCms\KlorchidCmsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [KlorchidCmsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
