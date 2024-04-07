<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $model;

    public function __construct(ProductModel $model){
        return $this->model = $model;
    }

    public function menu($category_id){
        $data = $this->model->productsbyCategory($category_id);
        if($data){
            return view('products.categoryView',['data'=>$data]);
        }
    }

    public function view($product_id){
        $data = $this->model->productbyId($product_id);
        if($data){
            return view('products.productView',['data'=>$data]);
        }
    }
}
