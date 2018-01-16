<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gramata extends Model
{
	protected $table='gramata';
    
        public function resursi()
    {
        return $this->hasOne('App\Resursi');
    }
}
