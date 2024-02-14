<?php

namespace App\Http\Controllers\Website\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\Product\ProductServices;
use Session;
use Validator;
use App\Models\ {
    OurProductModel,
    ProductDetails

};

class ProductController extends Controller
{
    public function __construct()
    {
        $this->service = new ProductServices();
    }

    // public function index()
    // {
    //     try {
    //         $data_output = $this->service->getAllProduct();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    //     return view('website.pages.product.product',compact('data_output'));
    // } 



    public function services() {
        $data_output_all_product = $this->service->getAllProduct();
        // $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        $all_services = OurProductModel::where(['is_active'=>true] )->orderBy('updated_at', 'asc')->get();
        $all_services_details = ProductDetails::leftJoin('our_product', 'our_product.id', '=', 'product_details.product_id')
                                                        ->select('product_details.id','product_details.product_id', 'product_details.title',
                                                        'product_details.image',
                                                        'our_product.product_name',
                                                        'our_product.id as service_details_id')
                                                        ->get();
                                                        // dd($all_services);
                                                        // die();
        return view('website.pages.product.product',compact('all_services','all_services_details', 'data_output_all_product'));
    }


    public function listServicesAjax(Request $request)
{
    try {
        $all_services_details = ProductDetails::leftJoin('our_product', 'our_product.id', '=', 'product_details.product_id');
        if($request['our_services_master_id'] != 'all') {
            $all_services_details =  $all_services_details->where('our_product.id','=',$request['our_services_master_id']);
        }
        $all_services_details =  $all_services_details->select('product_details.id', 'product_details.product_id', 'product_details.title',
            'product_details.image', 'our_product.product_title','our_product.product_description',
            'our_product.product_name', 'our_product.id as service_details_id')
            ->get();

        return $all_services_details;
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error fetching product details'], 500);
    }
}
// public function listServicesAjax(Request $request)
// {
//     try {
//         $all_services_details = ProductDetails::leftJoin('our_product', 'our_product.id', '=', 'product_details.product_id');
//         if($request['our_services_master_id'] != 'all') {
//             $all_services_details =  $all_services_details->where('our_product.id','=',$request['our_services_master_id']);
//         }
//         $all_services_details =  $all_services_details->select('product_details.id', 'product_details.product_id', 'product_details.title',
//             'product_details.image', \DB::raw("CONCAT(our_product.product_name, ' - ', our_product.product_description) AS service_details"),
//             'our_product.id as service_details_id')
//             ->get();

//         return $all_services_details;
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Error fetching product details'], 500);
//     }
// }

//  public function listServicesAjax(Request $request)
//     {
//         try {

//             $all_services_details = ProductDetails::leftJoin('our_product', 'our_product.id', '=', 'product_details.product_id');
//             if($request['our_services_master_id'] != 'all') {
//                 $all_services_details =  $all_services_details->where('our_product.id','=',$request['our_services_master_id']);
//             }
//             $all_services_details =  $all_services_details->select('product_details.id','product_details.product_id', 'product_details.title',
//                                     'product_details.image',
//                                     'our_product.product_name',
//                                     'our_product.id as service_details_id')
//                                     ->get();


//             return $all_services_details;
//         } catch (\Exception $e) {
//             return $e;
//         }
//     }

    
  
// }
}
