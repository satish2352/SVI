<?php
namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\IndexServices;


use Session;
use Validator;
use App\Models\ {
    AnimatedVideo,
    

};

class IndexController extends Controller
{
    public function __construct()
    {
        $this->service = new IndexServices();  
    }
    
    public function index(Request $request)
    {
        try {
            $data_output_aboutus = $this->service->getAllAboutUs();
            $data_output_product = $this->service->getFirstProduct();
           
            // print_r($data_output_aboutus);
            // die();
         
            return view('website.pages.index', compact('data_output_aboutus','data_output_product'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    // static function getCommonBanner() {
    //     try {
    //         $retun_data = [];
    //         $date_now = date("Y-m-d");            
    //         $website_banner_data =  AnimatedVideo::where('is_active', '=',true)
    //         ->select( 
    //             'animated_video.name',
    //             'animated_video.video_upload'
    //         )
    //         ->get()
    //         ->toArray();
    //         $retun_data['website_banner_data']  = $website_banner_data;
    //         return $retun_data ;
    //     } catch (\Exception $e) {
    //          info("Satish");
    //          info($e->getMessage());
    //     }
                   
    // }

    static function getCommonBanner($pageName) {
    try {
        $return_data = [];
        $date_now = date("Y-m-d");            
        $website_banner_data = AnimatedVideo::where('is_active', '=', true)
            // ->where('name', '=', $pageName) // Filter by the current page
            ->select(
                'animated_video.name',
                'animated_video.video_upload'
            )
            ->get()
            ->toArray();
            // dd( $website_banner_data);
            // die();
        $return_data['website_banner_data']  = $website_banner_data;
        return $return_data;
    } catch (\Exception $e) {
         info("Satish");
         info($e->getMessage());
    }
}   
}
