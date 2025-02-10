<?php

namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model
{
    protected $table      = 'grupos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'descripcion', 'maestro_id', 'created_at', 'updated_at'];

    // Validación de datos
    protected $validationRules = [
        'nombre'      => 'required|min_length[3]|max_length[50]',
        'descripcion' => 'permit_empty|max_length[255]',
        'maestro_id'  => 'required|integer',
    ];

    // Relación con el maestro
    public function getMaestro()
    {
        return $this->belongsTo(MaestroModel::class, 'maestro_id');
    }
}