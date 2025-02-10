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
    
        // Obtenemos los datos del formulario
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_entrega' => $this->request->getPost('fecha_entrega'),
            'maestro_id' => 1,  // Asignamos valor 1
            'grupo_id' => 1,    // Asignamos valor 1
        ];
    
        // Log para ver los datos recibidos
        log_message('info', 'Datos recibidos: ' . json_encode($data));
    
        // Validamos que los campos requeridos no estén vacíos
        if (empty($data['titulo']) || empty($data['descripcion']) || empty($data['fecha_entrega'])) {
            log_message('error', 'Faltan datos requeridos: ' . json_encode($data));
            return redirect()->to(base_url('dashboard'))->with('error', 'Por favor complete todos los campos');
        }
    
        // Intentamos insertar la tarea en la base de datos
        try {
            $result = $tareaModel->insert($data);
    
            // Verificamos si la inserción fue exitosa
            if ($result === false) {
                log_message('error', 'No se pudo insertar la tarea: ' . json_encode($data));
                return redirect()->to(base_url('dashboard'))->with('error', 'Hubo un error al crear la tarea');
            }
    
            log_message('info', 'Tarea creada correctamente: ' . json_encode($data));
            return redirect()->to(base_url('dashboard'))->with('success', 'Tarea creada correctamente');
        } catch (\Exception $e) {
            // Capturamos cualquier excepción y la registramos
            log_message('error', 'Error al crear tarea: ' . $e->getMessage());
            return redirect()->to(base_url('dashboard'))->with('error', 'Hubo un error al crear la tarea');
        }
    }
    
}
