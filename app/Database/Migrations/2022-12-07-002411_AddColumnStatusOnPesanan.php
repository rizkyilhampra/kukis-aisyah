<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnStatusOnPesanan extends Migration
{
    public function up()
    {
        $fields = [
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ];
        $this->forge->addColumn('pesanan', $fields);
    }

    public function down()
    {
        //
    }
}
