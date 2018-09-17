<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /*evento que se ejecuta luego de el registro de un nuevo usuario para crear su respectiva cuenta, ya que la relación de uno a uno*/
        UserWasRegistered::class => [
            CreateNewCuentaToUserCreated::class,
        ],
        //lo de arriba crea en la misma carpeta providers
        'App\Events\UserWasRegistered' => [
            'App\Listeners\CreateNewCuentaToUserCreated',
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
