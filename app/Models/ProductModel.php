<?php namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    // inisialisasi table
    protected $table = 'product';

    
    public function getProduct($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['product_id' => $id])->getRowArray();
        }   
    }

    public function saveProduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('product_id' => $id));
        return $query;
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table($this->table)->delete(array('product_id' => $id));
        return $query;
    } 

}