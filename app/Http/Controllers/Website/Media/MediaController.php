<?php

namespace App\Http\Controllers\Website\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\Media\MediaServices;
use Session;
use Validator;
// use App\Models\ {
// };

class MediaController extends Controller
{
    public function __construct()
    {
        $this->service = new MediaServices();
    }

    public function getAllMedia()
    {
        try {
            $data_output = $this->service->getAllMedia();
        } catch (\Exception $e) {
            return $e;
        }
        return view('website.pages.media.media',compact('data_output'));
    }  
}

