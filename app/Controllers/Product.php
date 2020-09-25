<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Product_model;
use App\Models\ProductModel;

class Product extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['product'] = $model->getProduct();
        echo view('ProductView',$data);
    }

    public function add_new()
    {
        echo view('AddProductView');
    }
 
    public function save()
    {
        $model = new ProductModel();
        $data = array(
            'product_name'  => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
        );
        $model->saveProduct($data);
        return redirect()->to('/product');
    }
}