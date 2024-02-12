<?php

namespace App\Http\Controllers\Website\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\Product\ProductServices;
use Session;
use Validator;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->service = new ProductServices();
    }

    public function index()
    {
        try {
            $data_output = $this->service->getAllProduct();
        } catch (\Exception $e) {
            return $e;
        }
        return view('website.pages.product.product',compact('data_output'));
    } 

  
}

