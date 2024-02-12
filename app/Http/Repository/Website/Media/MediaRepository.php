<?php
namespace App\Http\Repository\Website\Media;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Media

};

class MediaRepository  {
    
    public function getAllMedia()
    {
        try {
            $data_output = Media::where('is_active','=',true);
            $data_output =  $data_output->select('image');
            $data_output =  $data_output->orderBy('updated_at', 'desc')->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

}