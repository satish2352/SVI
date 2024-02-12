<?php
namespace App\Http\Services\Website\Media;

use App\Http\Repository\Website\Media\MediaRepository;

// use App\Marquee;
use Carbon\Carbon;


class MediaServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct(){
        $this->repo = new MediaRepository();
    }
        public function getAllMedia(){
    try {
        return $this->repo->getAllMedia();
    } catch (\Exception $e) {
        return $e;
    }
    }   
}