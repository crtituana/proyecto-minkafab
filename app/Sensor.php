<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model

{
    protected $table ='sensor';
    protected $fillable = [
            'name',
            'measure',
            'api_key',
            'status',
            'api_key_coded',
            'email_notice',
            'deleted',
            'sensor_type',
            'min_value',
            'max_value',
            'act_under_min_val',
            'act_over_max_val',
            'sample_time',
            'control',
            'intervalo',
    ];

    public function customer()
 {
     return $this->belongsTo('App/Customer');
 }

 public function controller()
 {
     return $this->belongsTo('App\Controller');
 }

 public function sensor_valor()
 {
     return $this->hasOne('App\Sensor_valor');
 }
}
