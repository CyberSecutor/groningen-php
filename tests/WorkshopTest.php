<?php

namespace MatthiasnobackWorkshop\GroningenPHP\Tests;

use MatthiasnobackWorkshop\GroningenPHP\Workshop;
use PHPUnit_Framework_TestCase;

class WorkshopTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_has_a_name()
    {
        $workshop = new Workshop('Practical Package Development');
        $this->assertSame('Practical Package Development', $workshop->name());
    }
}
