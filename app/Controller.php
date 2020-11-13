<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controller extends Model

{
    protected $table ='controller';
    protected $fillable = [
        'name'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customers');
    }
    
    public function sensor()
    {
        return $this->hasOne('App\Sensors');
    }

    public function actuator()
    {
        return $this->hasOne('App\Actuators');
    }

    public function model_controller()
    {
        return $this->belongsTo('App\Model_controllers');
    }
}
