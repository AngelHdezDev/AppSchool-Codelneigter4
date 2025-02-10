<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        // Verificar si el usuario ha iniciado sesión
        if (!session()->get('user')) {
            return redirect()->to('/login')->with('error', 'Debes iniciar sesión primero.');
        }

        return view('dashboard');
    }
}
