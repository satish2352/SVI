<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Services\DashboardServices;
use App\Models\ {
    User,
    OurProductModel,
    ProductDetails,
    Product,
    Testimonial,
    ProductServices,
    AnimatedVideo,
    Media,
    ContactUs,
   
};
use Validator;

class DashboardController extends Controller {
    /**
     * Topic constructor.
     */
    public function __construct()
    {
        // $this->service = new DashboardServices();
    }

    public function index()
    {
        $return_data = array();
        $return_data['our_product_category'] = count(OurProductModel::where('is_active',true)->orderBy('updated_at', 'desc')->get());
        $return_data['product_details'] = count(ProductDetails::where('is_active',true)->orderBy('updated_at', 'desc')->get());
        $return_data['product'] = count(Product::where('is_active',true)->orderBy('updated_at', 'desc')->get());
        $return_data['product_services'] = count(ProductServices::where('is_active',true)->orderBy('updated_at', 'desc')->get());
        $return_data['animated_video'] = count(AnimatedVideo::where('is_active',true)->orderBy('updated_at', 'desc')->get());
        $return_data['media'] = count(Media::where('is_active',true)->orderBy('updated_at', 'desc')->get());
        $return_data['contact_us'] = count(ContactUs::where('is_active',true)->orderBy('updated_at', 'desc')->get());
      

        return view('admin.pages.dashboard',compact('return_data'));
    }



}