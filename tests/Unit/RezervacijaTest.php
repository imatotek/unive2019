<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\unit;

use Tests\TestCase;

class RezervacijaTest extends TestCase
{

    public function testRezervacijaPostojiPredmet() {
        $r= \App\Rezervacija::all()->first()->predmet()->get()->first()->nazpred;
        $this->assertGreaterThanOREqual(2,strlen($r),'Ne psotoji predmet za ovu rezervaciju');
    }
}
