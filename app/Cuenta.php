<?php

namespace App;

use App\Movimiento;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public function user()
    {
    	return $this->belogsTo(User::class);
    }

    public function movimientos()
    {
    	return $this->hasMany(Movimiento::class);
    }
}
