<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'password', 'tipo', 'created_at', 'updated_at'];

    // Validación de datos
    protected $validationRules = [
        'nombre' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|is_unique[usuarios.email]',
        'password' => 'required|min_length[8]',
        'tipo' => 'required|in_list[admin,maestro]',
    ];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    // Encriptar la contraseña antes de insertarla o actualizarla
    protected function beforeInsert(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}
