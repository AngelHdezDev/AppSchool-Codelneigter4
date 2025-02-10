<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TareaModel;

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

    public function store()
    {
        $tareaModel = new TareaModel();

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            ' => $this->request->getPost('fecha_limite'),
        ];

        try {
            $tareaModel->insert($data);
            log_message('info', 'Tarea creada correctamente: ' . json_encode($data));
            return redirect()->to(base_url('dashboard'))->with('success', 'Tarea creada correctamente');
        } catch (\Exception $e) {
            log_message('error', 'Error al crear tarea: ' . $e->getMessage());
            return redirect()->to(base_url('dashboard'))->with('error', 'Hubo un error al crear la tarea');
        }
    }
}
