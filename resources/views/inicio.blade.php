@extends('layouts.app') 
@section('content')

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                    <div class="card-body">
                        <p class="card-text"></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/A765/registrarVehiculo">Registrar Vehículos</a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/A765/listarVehiculos">Listar Vehículos</a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/A765/estadisticasVehiculos">Estadísticas Vehículos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
