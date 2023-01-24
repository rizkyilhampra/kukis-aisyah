<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use CodeIgniter\I18n\Time;

class PesananController extends BaseController
{

    public function index()
    {
        $pesanan = $this->loadPesanan->findAll();

        $data = [
            'pesanan' => $pesanan
        ];

        echo view('/pesanan-v', $data);
    }

    public function adminIndex()
    {
        $db = db_connect();

        $queryCustom = $db->query(
            'SELECT 
            pesanan.id,
            pesanan.estimation,
            users.username,
            pesanan.created_at,
            pesanan.updated_at,
            pesanan.status,
            pesanan.total_harga
            FROM pesanan
            INNER JOIN users 
            ON pesanan.user_id = users.id'
        );
        $row   = $queryCustom->getResultArray();

        $data = [
            'row' => $row
        ];
        echo view('pesanan-v-admin', $data);
    }

    public function detailPesanan($idPesanan)
    {
        $model = new PesananModel();

        $pesananDetail = $model->mPesanan($idPesanan);

        $data = [
            'pesananDetail' => $pesananDetail
        ];

        return view('detailpesanan-v', $data);
    }

    public function updatePesanan($id)
    {
        $model = new PesananModel();
        if (!$pesanan = $model->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        if ($this->request->getMethod() === 'put' && $this->validate([
            'status' => 'required'
        ])) {
            $pesanan->status = $this->request->getPost('status');
            $pesanan->estimation = $this->request->getPost('date');

            if ($pesanan->hasChanged()) {
                $model->save($pesanan);
            }

            return redirect()->to('admin/pesanan')->with('success_message', 'Succesfully update product');
        }

        $data = [
            'pesanan' => $pesanan,
            'pesananCustom' => [
                'Selesai' => 'Selesai',
                'Proses' => 'Proses',
                'Batal' => 'Batal'
            ]
        ];

        return view('pesanan-v-edit', $data);
    }
}
