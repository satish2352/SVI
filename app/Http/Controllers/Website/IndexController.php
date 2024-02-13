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
                ->where('name', '=', $pageName) // Filter by the current page
                ->select(
                    'animated_video.name',
                    'animated_video.video_upload'
                )
                ->get()
                ->toArray();
            $return_data['website_banner_data']  = $website_banner_data;
            
            return $return_data;
        } catch (\Exception $e) {
             info("Satish");
             info($e->getMessage());
        }
    }
    
    // public function getCommonBanner(Request $request) {
    //     $pageName = $request->input('pageName');
    //     try {
    //         $return_data = [];
    //         $date_now = date("Y-m-d");            
    //         $website_banner_data = AnimatedVideo::where('is_active', '=', true)
    //             ->where('name', '=', $pageName) // Filter by the current page
    //             ->select(
    //                 'animated_video.name',
    //                 'animated_video.video_upload'
    //             )
    //             ->get()
    //             ->toArray();
    //         $return_data['website_banner_data']  = $website_banner_data;
            
    //         return view('banner_section', compact('return_data'));
    //     } catch (\Exception $e) {
    //          info("Satish");
    //          info($e->getMessage());
    //     }
    // }
    
    // static function getCommonFormData() {
    //     try {
    //         $retun_data = [];
    //         $data_output_location_address = LocationAddress::where('is_active', true)
    //         ->select(
    //             'location_address.name',
    //             'location_address.id'
    //         )
    //         ->get()
    //         ->toArray();

    //     $retun_data['data_output_location_address'] = $data_output_location_address;

    //         $data_output_all_board = EducationBoard::where('is_active', true)
    //             ->select(
    //                 'education_board.name',
    //                 'education_board.id'
    //             )
    //             ->get()
    //             ->toArray();
    
    //         $retun_data['data_output_all_board'] = $data_output_all_board;
    
    //         $data_output_all_class = EducationClass::where('is_active', true)
    //             ->select(
    //                 'education_class.name',
    //                 'education_class.id'
    //             )
    //             ->get()
    //             ->toArray();
    
    //         $retun_data['data_output_all_class'] = $data_output_all_class;
            
    //         $data_output_marquee_tab = MarqueeTab::where('is_active', true)
    //             ->select(
    //                 'marquee_tab.title',
    //                 'marquee_tab.id'
    //             )
    //             ->get()
    //             ->toArray();
    
    //         $retun_data['data_output_marquee_tab'] = $data_output_marquee_tab;
            
    //         $data_output_courses = CourseModel::where('is_active', true)
    //        ->select('id', 'service_name')
    //        ->get()
    //        ->toArray();
    //    $retun_data['data_output_courses'] = $data_output_courses;
    //         return $retun_data;
    //     } catch (\Exception $e) {
    //         // Log the error for debugging
    //         \Log::error($e);
    
    //         // Return an error response
    //         return ['error' => 'An error occurred while fetching data. Please try again later.'];
    //     }
    // }
    
   
}
