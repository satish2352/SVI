<?php

namespace App\Http\Controllers\Website\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\AboutUs\AboutUsServices;
use Session;
use Validator;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    ApplicationForm,
    EducationClass

};

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->service = new AboutUsServices();
    }
    public function index()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.aboutus.aboutus');

        } catch (\Exception $e) {
            return $e;
        }
    } 
}

