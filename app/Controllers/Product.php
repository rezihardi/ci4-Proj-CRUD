<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Product_model;
use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class Product extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\ProductModel';
 
    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }
    // public function index()
    // {
    //     $model = new ProductModel();
    //     $data['product'] = $model->getProduct();
    //     echo view('ProductView',$data);
    // }

    // public function add_new()
    // {
    //     echo view('AddProductView');
    // }
 
    // public function save()
    // {
    //     $model = new ProductModel();
    //     $data = array(
    //         'product_name'  => $this->request->getPost('product_name'),
    //         'product_price' => $this->request->getPost('product_price'),
    //     );
    //     $model->saveProduct($data);
    //     return redirect()->to('/product');
    // }

    // public function edit($id)
    // {
    //     $model = new ProductModel();
    //     $data['product'] = $model->getProduct($id)->getRow();
    //     echo view('EditProductView', $data);
    // }
 
    // public function update()
    // {
    //     $model = new ProductModel();
    //     $id = $this->request->getPost('product_id');
    //     $data = array(
    //         'product_name'  => $this->request->getPost('product_name'),
    //         'product_price' => $this->request->getPost('product_price'),
    //     );
    //     $model->updateProduct($data, $id);
    //     return redirect()->to('/product');
    // }
    // public function delete($id)
    // {
    //     $model = new ProductModel();
    //     $model->deleteProduct($id);
    //     return redirect()->to('/product');
    // }
}