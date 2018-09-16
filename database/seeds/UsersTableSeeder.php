<?php

use App\User;
use App\Cuenta;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
   
    public function run()
    {
    	User::truncate();
    	Cuenta::truncate();

        $admin = User::create([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('123456'),
        ]);
    	$cuenta = Cuenta::create([ 'saldo' => 0.00, 'user_id' => $admin->id ]);

    }
}
