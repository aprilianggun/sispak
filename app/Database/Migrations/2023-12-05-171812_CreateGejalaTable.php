<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGejalaTable extends Migration
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

            'G1' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G3' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G4' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G5' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G6' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G7' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G8' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G9' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G10' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G11' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G12' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G13' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G14' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G15' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G16' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G17' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G18' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G19' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G20' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G21' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G22' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'G23' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('gejala');
    }

    public function down()
    {
        $this->forge->dropTable('gejala', true);
    }
}
