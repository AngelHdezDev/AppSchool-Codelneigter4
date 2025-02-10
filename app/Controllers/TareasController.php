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
}
