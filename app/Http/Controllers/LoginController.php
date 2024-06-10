<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'login_email' => 'required|email',
            'login_senha' => 'required',
        ]);

        // Verificação das credenciais do usuário
        $credentials = $request->only('login_email', 'login_senha');

        if (auth()->attempt($credentials)) {
            return redirect()->route('homePage');
        } else{
            toastr()->error('Credenciais inválidas');
            return redirect()->route('login');
        }

        
        
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('perfis.login');
    }

    public function showDashboard()
    {
        return view('perfis.usuario.homePage');
    }
}
