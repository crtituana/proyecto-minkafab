<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_controller extends Model

{
    protected $table ='model_controller';
    protected $fillable = [
        'name',
        'nro_inputs',
        'nro_outputs'       
  ];

  public function controller()
  {
      return $this->hasOne('App\Controllers');
  }
}
