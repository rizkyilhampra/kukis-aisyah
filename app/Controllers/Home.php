<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {

        $model = new ProductModel();
        $products = $model->orderBy('image', 'desc')->findAll(5);
        $data = [
            'products' => $products,
        ];
        return view('main', $data);
    }

    public function formContact()
    {
        $name = $this->request->getPost('name');
        $message = $this->request->getPost('message');
        $salamPembuka = 'Halo, Saya ';
        header('Location: https://wa.me/628998039978?&text='.$salamPembuka.$name.'%0A'.$message);
        session()->setFlashdata('success','Pesan telah dikirim');
        exit;
    }
}
