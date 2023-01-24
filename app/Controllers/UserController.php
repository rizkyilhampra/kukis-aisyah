<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\PesanProductsModel;
use App\Models\ProductModel;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\HTTP\RedirectResponse;
use Exception;

class UserController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $product = $productModel->findAll();
        $data = [
            'product' => $product,
        ];
        return view('user', $data);
    }

    public function konfirmasiPesanan($id)
    {
        $model = new  ProductModel();
        $modelPesanProduct = new PesanProductsModel();

        $jumlahProduct = $this->request->getVar('jumlahStok');
        $b = $modelPesanProduct->hitungTotalHarga($id, $jumlahProduct);

        if (!$product = $model->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        if (
            !$this->request->getMethod() === 'put' && $this->validate(
                [
                    'jumlahStok' => 'required',
                ],
            )
        ) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        if ($this->request->getMethod() === 'post') {
            $db      = \Config\Database::connect();
            $db->transBegin();
            // Insert ke table pesanan
            $userId = user_id();
            $pesanan = new \App\Entities\Pesanan();
            $pesanan->user_id = $userId;

            $pesanan->total_harga = session()->get('d');
            $jumlahProduct = session()->get('e');
            
            $pesanan->status = 'Proses';
            $modelPesanan2 = model('App\Model\PesananModel');
            $modelPesanan2->save($pesanan);

            // Update Stok Product
            $builder = $db->table('products');
            // Cari stok product berdasar id product 
            // yang didapat dari GET
            $builder->select('*')->where('id', $id);
            $query = $builder->get()->getResult();
            $stokSekarang = $query[0]->stok;
            // Update stok product berdasarkan id product
            // dan data sekarang - data baru($dataStok)
            $dataStok = $stokSekarang - $jumlahProduct;
            $builder->set('stok', $dataStok);
            $builder->where('id', $id);
            $builder->update();

            $pesanProduct = new \App\Entities\PesanProducts();
            $pesanProduct->products_id = $id;
            $pesanProduct->jumlah = $jumlahProduct;

            $modelPesanan3 = new PesananModel();
            $pesanan2 = $modelPesanan3->where('user_id', $userId)->orderBy('id', 'desc')->first();
            $data2 = [
                'pesanan_id' => $pesanan2->id,
                'products_id' => $pesanProduct->products_id,
                'jumlah' => $pesanProduct->jumlah,
                'pesanProduct' => $pesanProduct
            ];
            $modelPesanProduct2 = model('App\Model\PesanProductsModel');
            $modelPesanProduct2->save($data2);
            if ($db->transStatus() === false) {
                $db->transRollback();
                session()->remove('d');
                return redirect()->to('/');
            } else {
                $db->transCommit();
                session()->remove('d');
                return redirect()->to('user/status')->with('success_message', 'Berhasil membuat pesanan');
            }
        }
        $data = [
            'totalharga' => $b,
            'product' => $product,
            'jumlahProduct' => $jumlahProduct
        ];
        return view('buatpesanan', $data);
    }

    public function status()
    {
        $modelPesanan = new PesananModel();
        $userId = user_id();
        $pesananDetail = $modelPesanan->detailPesananUser($userId);
        $data = [
            'pesananDetail' => $pesananDetail
        ];

        return view('user-status', $data);
    }
}
