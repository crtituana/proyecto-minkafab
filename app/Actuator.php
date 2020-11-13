<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actuator extends Model

{
    protected $table ='actuator';
    protected $fillable = [
        'name',
        'api_key',
        'status',
        'email_notice',
        'deleted',
        'ip_or_domaine',
        'start_hour',
        'action',
        'sunday',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'control',
        'port'
       ];

    public function actuator_action()
    {
        return $this->hasOne('App\Actuator_action');
    }

    public function controller()
    {
        return $this->belongsTo('App\Controller');
    }
}
