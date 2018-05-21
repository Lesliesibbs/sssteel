<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
      'event_name', 'start_date', 'end_date'
  ];
}
