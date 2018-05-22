<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    public function holidays()

    {
      return $this-hasMany('SSSTEELE\Holidays');
    }
}
