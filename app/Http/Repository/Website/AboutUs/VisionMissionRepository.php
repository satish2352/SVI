<?php
namespace App\Http\Repository\Website\AboutUs;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    AboutUs,
    VisionMission

};

class VisionMissionRepository  {


    public function getAllAboutus(){
        try {
            $data_output = AboutUs::where('is_active','=',true);
            $data_output =  $data_output->select('description', 'video_link');
            $data_output =  $data_output->orderBy('updated_at', 'desc')->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getAllVisionMission(){
        try {
            $data_output = VisionMission::where('is_active','=',true);
            $data_output =  $data_output->select('vision_description','mission_description', 'vision_image', 'mission_image');
            $data_output =  $data_output->orderBy('updated_at', 'desc')->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

}