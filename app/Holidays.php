<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holidays extends Model
{

  use SoftDeletes;

  protected $dates = ['deleted_at'];

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

  public function getGalleryAttribute($gallery)
  {

    return asset($gallery);
  }

    public function packages()
    {

      return $this->belongsTo('App\Packages');

    }
}
