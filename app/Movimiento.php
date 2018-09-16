<?php

namespace App;

use App\Cuenta;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $guarded = [];

    public function user(){
    	$this->belongsTo(User::class);
    }

    public function cuenta(){
    	$this->belongsToMany(Cuenta::class);
    }
}
