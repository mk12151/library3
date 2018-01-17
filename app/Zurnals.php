<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Zurnals extends Model
{
	protected $table='zurnals';
	



     public function resursi()
    {
        return $this->hasOne('App\Resursi');
    }
}
