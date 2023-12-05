<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDiagnosaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'id_gejala' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('penyakit');
    }

    public function down()
    {
        $this->forge->dropTable('penyakit', true);
    }
}
