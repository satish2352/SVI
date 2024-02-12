<?php

namespace App\Http\Controllers\Website\ProductServices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\ProductServices\ProductServicesServices;
use Session;
use Validator;
// use App\Models\ {
// };

class ProductServicesController extends Controller
{
    public function __construct()
    {
        $this->service = new ProductServicesServices();
    }
    public function index()
    {
        try {
            $data_output = $this->service->getAllProductServices();
        } catch (\Exception $e) {
            return $e;
        }
        return view('website.pages.product.services',compact('data_output'));
    } 
}

