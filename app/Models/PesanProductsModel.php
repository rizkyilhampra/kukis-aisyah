<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanProductsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pesan_products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\PesanProducts';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'pesanan_id',
        'products_id',
        'jumlah'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function hitungTotalHarga($id, $jumlahProduct)
    {
        $queryRow = $this->db->query(
            'SELECT products.price * '.$this->db->escape($jumlahProduct).'  AS totalharga FROM products WHERE products.id = '.$this->db->escape($id).''
        );

        return $queryRow->getResultArray();
    }
}
