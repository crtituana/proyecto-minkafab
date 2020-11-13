<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model

{
    protected $table ='customer';
    protected $fillable = [
        'name',
        'email',
        'password',
        'address_1',
        'address_2',
        'city',
        'region',
        'postal_code',
        'shipping_region_id',
        'mob_phone',
        'country_id',
        'status_id',
        'key',
        'created_on',
        'domain',
        'time_zone',
        'attemps',
        'locked_on',
        'telegram_id' 
    ];
 public function controller ()
 {
     return $this->hasMany('App/Controllers');
 }

 public function sensor ()
 {
     return $this->hasOne('App/Sensors');
 }
}
