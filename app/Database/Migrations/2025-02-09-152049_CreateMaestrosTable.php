<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMaestrosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false],
            'email' => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true, 'null' => false],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('maestros');
    }

    public function down()
    {
        $this->forge->dropTable('maestros');
    }
}
