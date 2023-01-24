<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use PhpParser\Node\Expr\Match_;
use stdClass;

use function PHPUnit\Framework\matches;

class ProductController extends BaseController
{
    public function index()
    {
        $products = $this->loadProduct->findAll();
        $data = [
            'products' => $products,
        ];
        echo view('product/product', $data);
    }


    public function create()
    {

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
            'image' => 'uploaded[image]|ext_in[image,png,jpg,jpeg]',
            'category' => 'required',
            'stok' => 'required',
            'price' => 'required'
        ])) {
            $imageFile = $this->request->getFile('image');
            $imageFileName = $imageFile->getRandomName();
            $imageFile->move('images/', $imageFileName);

            $product = new \App\Entities\Product();
            $product->title = $this->request->getPost('title');
            $product->description = $this->request->getPost('description');
            $product->image = "images/" . $imageFileName;
            $product->category = $this->request->getPost('category');
            $product->stok = $this->request->getPost('stok');
            $product->price = $this->request->getPost('price');

            $model = model('App\Models\ProductModel');
            $model->save($product);

            return redirect()->to('/admin/product')->with('success_message', 'Berhasil membuat produk baru');
        }
        $categoryCustom = [
            null => '&nbsp;',
            'Kue Kering' => 'Kue Kering',
            'Kue Basah' => 'Kue Basah'
        ];
        $data = [
            'category' => $categoryCustom
        ];

        echo view('product/create', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        if (!$product = $model->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        if ($this->request->getMethod() === 'put' && $this->validate([
            'title' => 'required',
            'image' => 'ext_in[image,png,jpg,jpeg]',
            'category' => 'required',
            'stok' => 'required',
            'price' => 'required'
        ])) {
            $imageFile = $this->request->getFile('image');
            $imageFileName = $imageFile->getRandomName();

            if ($imageFile->isValid()) {
                unlink($product->image);
                $imageFile->move('images/', $imageFileName);
                $product->image = "images/" . $imageFileName;
            }
            $product->title = $this->request->getPost('title');
            $product->description = $this->request->getPost('description');

            $product->category = $this->request->getPost('category');
            $product->stok = $this->request->getPost('stok');
            $product->price = $this->request->getPost('price');

            if ($product->hasChanged()) {
                $model->save($product);
            }

            return redirect()->to('admin/product')->with('success_message', 'Berhasil mengupdate produk');
        }
        $categoryCustom = [
            'Kue Kering' => 'Kue Kering',
            'Kue Basah' => 'Kue Basah'
        ];
        $data = [
            'product' => $product,
            'category' => $categoryCustom,
        ];
        echo view('product/update', $data);
    }

    public function destroy($id)
    {
        $model = new ProductModel();
        //handle untuk request dengan method "delete"
        if ($this->request->getMethod() === 'delete') {
            if (!$product = $model->find($id)) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
            // hapus data product dari tabel products
            
            unlink($product->image);
            $model->delete($product->id);
        }
        // handle untuk request dengan method selain 'delete'
        return redirect()->to('admin/product');
    }
}
