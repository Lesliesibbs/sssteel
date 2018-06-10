<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

  public $table = "inventory";
  Protected $fillable = [
    'packages_id',
    'category',
    'description',
    'condition',
    'cleanliness',
    'slug'
  ];
}
