<?php

namespace App\Http\Controllers\Website\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Services\Website\AboutUs\AboutUsServices;
use Session;
use Validator;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    ApplicationForm,
    EducationClass

};

class MediaController extends Controller
{
    public function __construct()
    {
        // $this->service = new AboutUsServices();
    }
    public function index()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.media.media');

        } catch (\Exception $e) {
            return $e;
        }
    } 
}

