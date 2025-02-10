<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Administrador',
                'email' => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'tipo' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan@example.com',
                'password' => password_hash('juan123', PASSWORD_DEFAULT),
                'tipo' => 'maestro',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserta los datos en la tabla
        $this->db->table('usuarios')->insertBatch($data);
    }
}
