<?php
namespace App\Http\Repository\Website\Product;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Product

};

class ProductRepository  {

  
    public function getAllProduct()
    {
        try {
            $data_output = Product::where('is_active','=',true);
            $data_output =  $data_output->select('id','title','description', 'image');
           
            $data_output =  $data_output->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

}