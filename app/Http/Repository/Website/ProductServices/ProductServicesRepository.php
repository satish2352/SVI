<?php
namespace App\Http\Repository\Website\ProductServices;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    ProductServices

};

class ProductServicesRepository  {

    public function getAllProductServices()
    {
        try {
            $data_output = ProductServices::where('is_active','=',true);
            $data_output =  $data_output->select('title','image');
            $data_output =  $data_output->orderBy('updated_at', 'desc')->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

}