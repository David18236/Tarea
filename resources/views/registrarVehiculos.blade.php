@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if (session()->has('registrado'))
			    <div class="container">
				    <div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>	
	        		    <span class="glyphicon glyphicon-ok"><strong>¡La persona y el vehiculo han sido registrados exitosamente!</strong>
				    </div>
			    </div>
			    @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Zona de Registros') }} 
                    <button type="button" onclick="window.location='/A765'" class="btn btn-outline-primary float-right">Volver</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('vehiculos.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula:') }}</label>

                            <div class="col-md-6">
                                <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus placeholder="Ingresar cédula" min="0">

                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus placeholder="Ingresar nombre">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="placa" class="col-md-4 col-form-label text-md-right">{{ __('Placa:') }}</label>

                            <div class="col-md-6">
                                <input id="placa" type="text" class="form-control @error('placa') is-invalid @enderror" name="placa" value="{{ old('placa') }}" required autocomplete="placa" autofocus placeholder="Ingrese placa de vehículo">

                                @error('placa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca:') }}</label>

                            <div class=" col-md-6">
                                <select name="marca" required id="marca" class="form-control ">
                                    @foreach($marca_models as $marca)
                                            <option value="{{ $marca -> nombre }}">{{ $marca -> nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
