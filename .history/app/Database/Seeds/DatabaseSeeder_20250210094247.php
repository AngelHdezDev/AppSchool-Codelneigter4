<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsuarioSeeder');
        $this->call('AlumnoSeeder');
        $this->call('MaestroSeeder');
        $this->call('GrupoSeeder');
        $this->call('TareaSeeder');
        $this->call('CalificacionesSeeder');
    }
}
