<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Check_Out extends Model
{
  Protected $fillable = [
     'date',
     'check_out_date',
     'gas_reading',
     'certificates',
     'electric_reading',
     'smake_detector',
     'manuals',
     'keys',
     'property_clean',
     'carpets_clean',
     'slug'
  ];
}
