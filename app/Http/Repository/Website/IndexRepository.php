<?php
namespace App\Http\Repository\Website;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    AboutUs,
    Product
 
};

class IndexRepository  {

    public function getAllAboutUs()
    {
        try {
            $data_output = AboutUs::where('is_active','=',true);
            $data_output =  $data_output->select('id','description', 'video_link');
           
            $data_output =  $data_output->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    // public function getAllProduct()
    // {
    //     try {
    //         $data_output = Product::where('is_active','=',true);
    //         $data_output =  $data_output->select('id','title','description', 'image');
           
    //         $data_output =  $data_output->get()->toArray();
    //         return  $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function getFirstProduct()
{
    try {
        $data_output = Product::where('is_active', true)
                             ->select('id','title','description', 'image')
                             ->limit(1) // Limiting to one record
                             ->get()
                             ->toArray();
        
        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
}

    
    


}