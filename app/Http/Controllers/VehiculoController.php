<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\VehiculoModel;
use App\PersonaModel;
use App\MarcaModel;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = MarcaModel::all();
        return view('registrarVehiculos')->with('marca_models', $marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=([
            'cedula.unique' => 'Persona Ya Existente',
            'cedula.numeric' => 'Datos Incorrectos',
            'marca.string' => 'Datos Incorrectos',
            'marca.exists' => 'Marca No Registrada',
        ]);

        $request->validate([
            'cedula' => 'required|unique:persona_models|numeric',
            'marca' => 'required|exists:marca_models,nombre',
        ],$message);

        $persona = new PersonaModel([
            'cedula' => $request->get('cedula'),
            'nombre' => $request->get('nombre'),
        ]);
        $persona->save();
        $vehiculo = new VehiculoModel([
            'placa' => $request->get('placa'),
            'marca' => $request->get('marca'),
            'dueno' => $request->get('cedula'),
        ]);
        $vehiculo->save();

        session()->flash('registrado', 'La persona y el vehiculo han sido registrados exitosamente');

        return redirect('/A765/registrarVehiculo');
        
    }

    public function show()
    {
        $vehiculos = VehiculoModel::all();
        return view('listarVehiculos')->with('vehiculo_models', $vehiculos);
    }

    public function stats()
    {
        $counts = array();
        $marcas = DB::table('marca_models')->pluck('nombre');
        foreach ($marcas as $marca) {
            $counts[$marca] = DB::table('vehiculo_models')->where('marca', $marca)->count();
        }
        return view('estadisticasVehiculos')->with('counts', $counts);
    }
}
