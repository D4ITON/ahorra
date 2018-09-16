<?php

namespace App;

use App\Movimiento;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public function user()
    {
    	$this->belogsTo(User::class);
    }

    public function movimientos()
    {
    	$this->hasMany(Movimiento::class);
    }
}
