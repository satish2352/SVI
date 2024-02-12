<?php

namespace App\Http\Controllers\Website\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\AboutUs\VisionMissionServices;
use Session;
use Validator;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    ApplicationForm,
    EducationClass

};

class VisionMissionController extends Controller
{
    public function __construct()
    {
        $this->service = new VisionMissionServices();
    }

    public function getAllAboutus()
    {
        try {
            $data_output = $this->service->getAllAboutus();
        

        } catch (\Exception $e) {
            return $e;
        }
        return view('website.pages.aboutus.aboutus',compact('data_output'));
    } 

          public function index(Request $request)
    {
        try {
            $data_output_aboutus = $this->service->getAllAboutus();
            $data_output_vision_mission = $this->service->getAllVisionMission();
           
            // print_r($data_output_aboutus);
            // die();
         
            return view('website.pages.aboutus.aboutus', compact('data_output_aboutus','data_output_vision_mission'));
        } catch (\Exception $e) {
            return $e;
        }
    }
}

