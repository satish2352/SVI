<?php

namespace App\Http\Controllers\Website\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Services\Website\AboutUs\AboutUsServices;
use Session;
use Validator;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    ApplicationForm,
    EducationClass

};

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->service = new AboutUsServices();
    }
    public function index()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.product.product');

        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getServices()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.product.services');

        } catch (\Exception $e) {
            return $e;
        }
    } 
}

