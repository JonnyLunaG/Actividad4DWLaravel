<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuarios.listar', ['usuarios'=> $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required|max:10|unique:usuarios',
            'clave' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'genero' => 'required',
            'correo' => 'nullable|email'
        ]);

        try {
            $usuario = Usuario::create([
                'cedula' => $request->input('cedula'),
                'clave' => $request->input('clave'),
                'nombre' => $request->input('nombre'),
                'apellido' => $request->input('apellido'),
                'genero' => $request->input('genero'),
                'email' => $request->input('correo')
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'La cédula ya está siendo utilizada por otro usuario');
        }

        return redirect("Usuarios")->with('success', 'Usuario creado exitosamente');
    }



    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'El Usuario no existe');
        }

        $usuario->delete();

        Session::flash('success', 'El Usuario ha sido eliminado exitosamente');

        return redirect("Usuarios");
    }
}
