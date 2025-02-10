<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MaestroSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Carlos González',
                'email' => 'carlos@example.com',
                'password' => password_hash('carlos123', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserta los datos en la tabla
        $this->db->table('maestros')->insertBatch($data);
    }
}
