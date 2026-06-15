<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePlansTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'plan_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'plan_price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'plan_duration' => [
                'type'       => 'INT',
                'constraint' => 11,
                'comment'    => 'Duration in days',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
                'comment'    => '1=active, 0=inactive',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('plans');
    }

    public function down()
    {
        $this->forge->dropTable('plans');
    }
} 