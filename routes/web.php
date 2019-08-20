<?php

Route::get('/A765', 'VehiculoController@index');
Route::get('/A765/registrarVehiculo', 'VehiculoController@create');
Route::get('/A765/listarVehiculos', 'VehiculoController@show');
Route::get('/A765/estadisticasVehiculos', 'VehiculoController@stats');
Route::resource('vehiculos', 'VehiculoController');

Route::fallback(function() {
    return view('error');
});
