<?php

namespace SSSTEELE;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model

{

  Protected $fillable = [

'property_type',
'house_name',
'address_1',
'address_2',
'address_3',
'city',
'county',
'country' ,
'postcode' ,
'tenancy_type'

];

    public function holidays()

    {
      return $this-hasMany('SSSTEELE\Holidays');
    }
}
