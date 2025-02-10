<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsuarioSeeder');
        $this->call('AlumnosSeeder');
        $this->call('MaestrosSeeder');
        $this->call('GruposSeeder');
        $this->call('TareasSeeder');
        $this->call('CalificacionesSeeder');
    }
}
