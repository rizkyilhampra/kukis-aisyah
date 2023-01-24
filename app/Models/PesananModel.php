<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\Pesanan';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'status',
        'total_harga',
        'estimation'
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

    public function mPesanan($idPesanan)
    {
        $queryRow = $this->db->query(
            'SELECT pesanan.id, users.username, products.title, products.category, pesanan.created_at, pesanan.updated_at, pesanan.status, pesan_products.jumlah FROM pesanan 
            INNER JOIN users ON pesanan.user_id=users.id
            INNER JOIN pesan_products ON pesanan.id = pesan_products.pesanan_id
            INNER JOIN products ON pesan_products.products_id = products.id
            WHERE pesanan.id=' . $idPesanan . ''
        );

        return $queryRow->getResultArray();
    }

    public function detailPesananUser($userId)
    {
        $queryRow = $this->db->query(
            'SELECT
            users.username, 
            products.title,
            products.category,
            pesanan.status,
            pesan_products.jumlah,
            pesanan.total_harga,
            pesanan.estimation
            FROM pesanan
            INNER JOIN pesan_products ON pesan_products.pesanan_id = pesanan.id
            INNER JOIN users ON pesanan.user_id = users.id
            INNER JOIN products ON pesan_products.products_id = products.id
            WHERE user_id = ' . $userId . ''
        );

        return $queryRow->getResultArray();
    }
}
