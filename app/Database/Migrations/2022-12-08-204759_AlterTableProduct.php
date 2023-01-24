<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableProduct extends Migration
{
    public function up()
    {
        $fields = [
            'price' => [
                'type' => 'INT',
                'constraint' => 255,
            ],
        ];
        $this->forge->addColumn('products', $fields);
    }

    public function down()
    {
        //
    }
}
