<?php

namespace App\Http\Controllers;

use App\Cuenta;
use App\Movimiento;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index()
    {
        return Movimiento::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        // dd($request->tipo);
        $c = Cuenta::where('user_id',auth()->id())->get()->pluck('user_id')->first();
        $movimiento = new Movimiento();
        $movimiento->tipo = $request->tipo;
        $movimiento->monto = $request->monto;
        $movimiento->cuenta_id = $c; // esto debe ser modificado
        $movimiento->user_id = auth()->id();
        $movimiento->save();

        return $movimiento;
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
