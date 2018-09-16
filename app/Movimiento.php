<?php

namespace App;

use App\Cuenta;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $guarded = [];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function cuenta(){
    	return $this->belongsToMany(Cuenta::class);
    }
}
