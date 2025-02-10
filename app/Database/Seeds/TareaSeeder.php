<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TareaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'titulo' => 'Tarea 1: Álgebra',
                'descripcion' => 'Resolver los problemas de álgebra del capítulo 1',
                'fecha_entrega' => '2025-02-20',
                'maestro_id' => 1, // ID del maestro
                'grupo_id' => 1, // ID del grupo
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'titulo' => 'Tarea 2: Cinemática',
                'descripcion' => 'Estudiar los conceptos de movimiento rectilíneo',
                'fecha_entrega' => '2025-02-25',
                'maestro_id' => 1, // ID del maestro
                'grupo_id' => 2, // ID del grupo
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserta los datos en la tabla
        $this->db->table('tareas')->insertBatch($data);
    }
}
