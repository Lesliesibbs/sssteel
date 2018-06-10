<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
  Protected $fillable = [
    'title',
    'description',
    'city',
    'country',
    'duration',
    'arrival_date',
    'departure_date',
    'gallery',
    'packages_id',
    'slug'
  ];
}
