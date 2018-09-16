<?php

namespace App\Http\Controllers;

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
        // dd($request);
        $movimiento = new Movimiento();
        $movimiento->tipo = '1';
        $movimiento->monto = $request->monto;
        $movimiento->cuenta_id = '1'; // esto debe ser modificado
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
