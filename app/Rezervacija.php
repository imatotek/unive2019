<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
/*
 * u bazi je zapisano SR, Vrati Srijed
 * 
 */
public function getOznvrstadanAttribute($value)
    {
    $dan='';
    switch ($value) {
        case 'Po': $dan= 'Ponedjeljak'; break;
        case 'Ut': $dan= 'Utorak'; break;
        case 'Sr': $dan= 'Srijeda'; break;
        case 'Ce': $dan= 'četvrtak'; break;
        case 'Pe': $dan= 'Petak'; break;
        
        default: $dan='Greška';
            break;
    return $dan;
    }
    
    }


public function predmet()
    {
        return $this->belongsTo('App\Predmet');
    }
}
/* $r=Rezervacija::all()->First();
 $r->predmet()->get()->first();
$r->predmet()->get()->first()->nazpred;


echo Rezervacija::all()->First()->predmet()->get()->first()->nazpred;

