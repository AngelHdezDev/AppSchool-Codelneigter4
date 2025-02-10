<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TareaModel;

class DashboardController extends BaseController
{
    public function index()
    {
        // Verificar si el usuario ha iniciado sesión
        if (!session()->get('user')) {
            return redirect()->to('/login')->with('error', 'Debes iniciar sesión primero.');
        }

        $tareaModel = new TareaModel(); 
        $tareas = $tareaModel->findAll();
        return view('dashboard', ['tareas' => $tareas]);

    }
}
