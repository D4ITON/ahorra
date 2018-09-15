@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card row">
                <div class="card-header">GESTION DE DINERO</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row">
                        <div class="col-md-6">SEPTIEMBRE 2018</div>
                        <div class="col-md-6">103.10</div>
                </div>
                   <button class="btn btn-success">ENTRADA</button>
                   <button class="btn btn-danger">SALIDA</button>
                </div>
                <div class="card-footer">
                    {{-- INICIO DE TABLA --}}
                    <table class="table table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Movimiento</th>
                              <th scope="col">Monto</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Vie 14 Sept</td>
                              <td>Entrada</td>
                              <td>S/ 10.00</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        {{-- FIN DE TABLA --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
