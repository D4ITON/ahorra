<?php

namespace App\Listeners;

use App\Cuenta;
use App\Events\UserWasRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateNewCuentaToUserCreated
{
    
    // public function __construct()
    // {
    //     //
    // }
    //se ejecuta automaticamente cuanto el evento se dispara
    public function handle(UserWasRegistered $event)
    {
        // dd($event->userId);
        Cuenta::create([
            'saldo' => 0.00,
            'user_id' => $event->userId
        ]);
    }
}
