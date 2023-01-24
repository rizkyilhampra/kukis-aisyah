<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePesanProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'pesanan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'products_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pesanan_id', 'pesanan', 'id');
        $this->forge->addForeignKey('products_id', 'products','id');
        $this->forge->createTable('pesan_products');
    }

    public function down()
    {
        $this->forge->dropTable('pesan_products');
    }
}
