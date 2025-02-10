<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TareasController extends BaseController
{
    public function index()
    {
        return view('tareas');
    }

    public function tarea()
    {
        return view('createTarea');
    }

    public function store() {}

    public function store()
    {
        $tareaModel = new TareaModel();

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_limite' => $this->request->getPost('fecha_limite'),
        ];

        $tareaModel->insert($data);

        return redirect()->to(base_url('dashboard'))->with('success', 'Tarea creada correctamente');
    }
}
