<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Carbon;



class Resursi extends Model
{

protected $table='resurs';


public function gramata()
    {
        return $this->belongsTo('App\Gramata');
    }

	

	
	public function zurnals()
    {
        return $this->belongsTo('App\Zurnals');
    }


     public function images() {
        return array(
            'server_path' => public_path().'/uploads/',
            'asset_path' => 'uploads/',
            'image_small' => $this->id.'_small.png',

        );
    }



}
