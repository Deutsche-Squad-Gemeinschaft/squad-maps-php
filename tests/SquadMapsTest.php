<?php

namespace SquadMaps\Tests;

use SquadMaps\SquadMaps;

class SquadMapsTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp() : void
    {
        //
    }

    /**
     * Verifies that the package actually does contain any map.
     *
     * @test
     * @test
     */
    public function it_contains_maps() {
        /* Get list of maps */
        $maps = SquadMaps::getMaps();

        /* Should contain something */
        $this->assertTrue(count($maps) > 0);
    }
}