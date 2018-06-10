<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Check_In extends Model
{
  Protected $fillable = [
    'date',
    'check_in_date',
    'gas_reading',
    'certificates',
    'electric_reading',
    'smake_detector',
    'manuals',
    'keys',
    'property_clean,',
    'carpets_clean',
    'packages_id',
    'slug'
  ]; 
}
