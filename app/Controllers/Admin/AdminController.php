<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\PesanProductsModel;
use App\Models\ProductModel;
use Myth\Auth\Models\UserModel as ModelsUserModel;

class AdminController extends BaseController
{
    public function index()
    {
        $modelUser = new ModelsUserModel();
        $totalPelanggan = $modelUser->select('COUNT(ID) AS totaluser')->findAll();
        $dataTotalPelanggan = $totalPelanggan[0]->totaluser;


        $modelPesanan = new PesananModel();
        $totalUserPesanan = $modelPesanan->select('COUNT(DISTINCT user_id) AS totaluserpesanan')->findAll();
        $dataTotalUserPesanan = $totalUserPesanan[0]->totaluserpesanan;

        $totalPesanan = $modelPesanan->select('COUNT(id) AS totalpesanan')->findAll();
        $dataTotalPesanan = $totalPesanan[0]->totalpesanan;

        $totalPesananSelesai = $modelPesanan->select('COUNT(status) AS totalStatusSelesai')->where('status', 'selesai')->orWhere('status', 'Selesai')->findAll();
        $dataTotalPesananSelesai = $totalPesananSelesai[0]->totalStatusSelesai;

        $totalPesananProses = $modelPesanan->select('COUNT(status) AS totalStatusProses')->where('status', 'proses')->orWhere('status', 'Proses')->findAll();
        $dataTotalPesananProses = $totalPesananProses[0]->totalStatusProses;
        
        $totalPesananBatal = $modelPesanan->select('COUNT(status) AS totalStatusBatal')->where('status', 'batal')->orWhere('status', 'Batal')->findAll();
        $dataTotalPesananBatal = $totalPesananBatal[0]->totalStatusBatal;

        $modelPesanProduct = new PesanProductsModel();
        $totalProductTerjual = $modelPesanProduct->select('COUNT(products_id) AS totalProductTerjual')->findAll();
        $dataTotalProductTerjual = $totalProductTerjual[0]->totalProductTerjual;

        $totalJumlahHargaPesanan = $modelPesanan->select('SUM(total_harga) AS totalharga')->findAll();
        $dataTotalJumlahHargaPesanan = $totalJumlahHargaPesanan[0]->totalharga;

        $modelProduct = new ProductModel();
        $jumlahProduct = $modelProduct->select('COUNT(id) AS jumlahproduct')->findAll();
        $dataJumlahProduct = $jumlahProduct[0]->jumlahproduct;

        $data = [
            'totalpelanggan' => $dataTotalPelanggan,
            'jumlahproduct' => $dataJumlahProduct,
            'totaluserpesanan' => $dataTotalUserPesanan,
            'totalpesanan' => $dataTotalPesanan,
            'totalStatusSelesai' => $dataTotalPesananSelesai,
            'totalPesananProses' => $dataTotalPesananProses,
            'totalPesananBatal' => $dataTotalPesananBatal,
            'totalJumlahHargaPesanan' => $dataTotalJumlahHargaPesanan,
            'totalProductTerjual' => $dataTotalProductTerjual
        ];

        return view('admin-home-v', $data);
    }
    public function auth()
    {
        return view('admin-auth-v');
    }
}
