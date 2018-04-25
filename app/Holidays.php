<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    public function packages()
    {

      return $this->belongsTo('App\Packages');

    }
}
