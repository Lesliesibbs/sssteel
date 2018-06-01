<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public function user(){
    return $this->belongsTo('SSSTEELE\User');
  }

  protected $fillable = ['user_id', 'avatar', 'about'];
}
