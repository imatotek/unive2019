<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predmet extends Model
{
      public function rezervacije()
    {
        return $this->hasMany('App\Rezervacija');
    }
}
