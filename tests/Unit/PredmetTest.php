<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PredmetTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample() {
        $p3 = Predmet::has('rezervacije')->count();
        $p1 = Predmet::doesnthave('rezervacije')->count();
        $p2 = Predmet::with('rezervacije')->count();

        $this->assertGreatThanOrEqual(1, $p1, 'Nema barem 1 predmet');
        $this->assertGreatThanOrEqual(2, $p2, 'Nismo skužili');
        $this->assertGreatThanOrEqual(3, $p3, 'Nema barem 1 predmet');

        $this->assertTrue(true);
    }

}
