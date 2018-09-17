<?php

namespace App\Http\Controllers;

use App\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    
    public function index()
    {
        return Cuenta::where('user_id', auth()->id())->get()->first()->saldo;
    }

    
    public function store(Request $request)
    {
        
        $saldo = Cuenta::where('user_id', auth()->id())->get()->first()->saldo;
    //entrda es tipo 1 salida es tipo 0
        if ($request->tipo == 1) {
           Cuenta::where('user_id', auth()->id())->update([
                'saldo' => $saldo + $request->monto,
            ]);
        }
        else{
           Cuenta::where('user_id', auth()->id())->update([
                'saldo' => $saldo - $request->monto,
            ]);
        }
        $saldoUpdated = Cuenta::where('user_id', auth()->id())->get()->first()->saldo;

        return compact('saldo','saldoUpdated');
    }

    
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
