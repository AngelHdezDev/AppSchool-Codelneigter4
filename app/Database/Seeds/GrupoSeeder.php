<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GrupoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Matemáticas 101',
                'descripcion' => 'Grupo de matemáticas para primer semestre',
                'maestro_id' => 1, // ID del maestro
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Física 101',
                'descripcion' => 'Grupo de física para primer semestre',
                'maestro_id' => 1, // ID del maestro
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserta los datos en la tabla
        $this->db->table('grupos')->insertBatch($data);
    }
}
