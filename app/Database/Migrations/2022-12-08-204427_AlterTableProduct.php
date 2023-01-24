<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableProduct extends Migration
{
    public function up()
    {
        $fields = [
            'type' => [
                'name' => 'category',
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
        ];
        $this->forge->modifyColumn('products', $fields);
    }

    public function down()
    {
        //
    }
}
