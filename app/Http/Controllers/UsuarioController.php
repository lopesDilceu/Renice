<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'us_nome' => 'required',
            'us_cpf' => 'required',
            'us_data_nasc' => 'required|date',
            'us_email' => 'required|email|unique:usuarios,us_email',
            'us_senha' => 'required',
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.index')
                         ->with('success', 'Usuário criado com sucesso.');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'us_nome' => 'required',
            'us_cpf' => 'required',
            'us_data_nasc' => 'required|date',
            'us_email' => 'required|email|unique:usuarios,us_email,' . $id,
            'us_senha' => 'required',
        ]);

        $usuario = Usuario::find($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
                         ->with('success', 'Usuário atualizado com sucesso.');
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuarios.index')
                         ->with('success', 'Usuário deletado com sucesso.');
    }
}
