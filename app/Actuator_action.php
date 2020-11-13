<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actuator_action extends Model
{
    protected $table ='actuator_action';
    protected $fillable = [
        'time', 
        'action_way',   
        'http', 
        'email_sent'
    ];

    public function actuator()
    {
        return $this->belongsTo('App\Actuator');
    }
}
