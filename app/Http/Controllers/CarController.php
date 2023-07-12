<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculo = Vehiculo::all();
        return view('vehiculos.listar', ['vehiculos'=> $vehiculo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('vehiculos.agregar');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|max:6',
            'marca' => 'required',
            'modelo' => 'required',
            'version' => 'required',
            'color' => 'required',
            'numPuestos' => 'required',
            'numPuertas' => 'required',
            'combustible' => 'required',
            'kilometros' => 'required',
            'cilindraje' => 'required',
            'categoria' => 'required'
        ]);

        $vehiculo = new Vehiculo();
        $vehiculo->placa = $request->input('placa');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->version = $request->input('version');
        $vehiculo->color = $request->input('color');
        $vehiculo->numPuestos = $request->input('numPuestos');
        $vehiculo->numPuertas = $request->input('numPuertas');
        $vehiculo->combustible = $request->input('combustible');
        $vehiculo->kilometros = $request->input('kilometros');
        $vehiculo->cilindraje = $request->input('cilindraje');
        $vehiculo->categoria = $request->input('categoria');

        try {
            $vehiculo->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'La placa ya está siendo utilizada por otro vehículo');
        }

        return redirect("Vehiculos")->with('success', 'El vehículo creado con exito');
    }


    /**
     * Display the specified resource.
     */


    public function show(Request $request)
    {
         $placa = $request->input('placa');
         $vehiculo = Vehiculo::where('placa', $placa)->first();

         if (!$vehiculo) {
             return redirect()->back()->with('error', 'No se encontró ningún vehículo con esa placa');
         }

         return view('vehiculos.consultar', ['data_vehi'=> $vehiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.editar', ['data_vehi'=> $vehiculo]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'placa' => 'required|max:6|unique:vehiculos,placa,'.$id,
            'marca' => 'required',
            'modelo' => 'required',
            'version' => 'required',
            'color' => 'required',
            'numPuestos' => 'required',
            'numPuertas' => 'required',
            'combustible' => 'required',
            'kilometros' => 'required',
            'cilindraje' => 'required',
            'categoria' => 'required'
        ]);

        $vehiculo = Vehiculo::find($id);

        if (!$vehiculo) {
            return redirect()->back()->with('msj', 'El vehículo no existe');
        }

        $vehiculo->placa = $request->input('placa');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->version = $request->input('version');
        $vehiculo->color = $request->input('color');
        $vehiculo->numPuestos = $request->input('numPuestos');
        $vehiculo->numPuertas = $request->input('numPuertas');
        $vehiculo->combustible = $request->input('combustible');
        $vehiculo->kilometros = $request->input('kilometros');
        $vehiculo->cilindraje = $request->input('cilindraje');
        $vehiculo->categoria = $request->input('categoria');

        try {
            $vehiculo->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'La placa ya está siendo utilizada por otro vehículo');
        }

        return redirect("Vehiculos")->with('success', 'El vehículo ha sido actualizado exitosamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);

        if (!$vehiculo) {
            return redirect()->back()->with('error', 'El vehículo no existe');
        }

        $vehiculo->delete();

        Session::flash('success', 'El vehículo ha sido eliminado exitosamente');

        return redirect("Vehiculos");
    }
}
