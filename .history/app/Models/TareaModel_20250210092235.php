<?php

namespace App\Models;

use CodeIgniter\Model;

class TareaModel extends Model
{
    protected $table      = 'tareas';
    protected $primaryKey = 'id';

    protected $allowedFields = ['titulo', 'descripcion', 'fecha_entrega', 'maestro_id', 'grupo_id', 'created_at', 'updated_at', 'deleted_at'];

    // Validación de datos
    protected $validationRules = [
        'titulo'      => 'required|max_length[255]',
        'descripcion' => 'permit_empty',
        'fecha_entrega'=> 'required|valid_date',
        'maestro_id'  => 'required|integer',
        'grupo_id'    => 'required|integer',
    ];

    // Relación con maestros y grupos
    public function getMaestro()
    {
        return $this->belongsTo(MaestroModel::class, 'maestro_id');
    }

    public function getGrupo()
    {
        return $this->belongsTo(GrupoModel::class, 'grupo_id');
    }
}