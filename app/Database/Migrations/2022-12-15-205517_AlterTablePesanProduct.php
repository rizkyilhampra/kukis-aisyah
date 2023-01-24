<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTablePesanProduct extends Migration
{
    public function up()
    {
        $fields = [
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true
            ],
        ];
        $this->forge->addColumn('pesan_products', $fields);
    }

    public function down()
    {
        //
    }
}
