@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card row">
                <div class="card-header text-center">GESTION DE DINERO</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                            <div class="col-md-6">SEPTIEMBRE 2018</div>
                            <div class="col-md-6">S/ 103.10</div>
                    </div>
                    {{-- MODAL INICIO --}}
                        
                    {{-- MODAL FINAL --}}
                </div>
                <div class="card-footer">
                    {{-- INICIO DE TABLA --}}
                        <movement-component></movement-component>
                    {{-- FIN DE TABLA --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
