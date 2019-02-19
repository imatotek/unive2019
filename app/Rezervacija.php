<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
public function predmet()
    {
        return $this->belongsTo('App\Predmet');
    }
}
/* $r=Rezervacija::all()->First();
 $r->predmet()->get()->first();
$r->predmet()->get()->first()->nazpred;


echo Rezervacija::all()->First()->predmet()->get()->first()->nazpred;

