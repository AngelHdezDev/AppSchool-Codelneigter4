<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Ana López',
                'email' => 'ana@example.com',
                'telefono' => '1234567890',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Luis Martínez',
                'email' => 'luis@example.com',
                'telefono' => '0987654321',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserta los datos en la tabla
        $this->db->table('alumnos')->insertBatch($data);
    }
}
