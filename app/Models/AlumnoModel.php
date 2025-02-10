<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $table      = 'alumnos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'telefono', 'created_at', 'updated_at'];

    // Validación de datos
    protected $validationRules = [
        'nombre'    => 'required|min_length[3]|max_length[255]',
        'email'     => 'required|valid_email|is_unique[alumnos.email]',
        'telefono'  => 'permit_empty|max_length[15]',
    ];
}