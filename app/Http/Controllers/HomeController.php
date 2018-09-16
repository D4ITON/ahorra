<?php

namespace App\Http\Controllers;

use App\Cuenta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($cuenta);
        return view('home');
    }

    public function saldo()
    {
        $saldo = Cuenta::where('user_id', auth()->id())->get()->first()->saldo;
        return $saldo;
    }
}
