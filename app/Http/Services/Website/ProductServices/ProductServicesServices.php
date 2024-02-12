<?php
namespace App\Http\Services\Website\ProductServices;

use App\Http\Repository\Website\ProductServices\ProductServicesRepository;

// use App\Marquee;
use Carbon\Carbon;


class ProductServicesServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct(){
        $this->repo = new ProductServicesRepository();
    }
        public function getAllProductServices(){
    try {
        return $this->repo->getAllProductServices();
    } catch (\Exception $e) {
        return $e;
    }
    }   
}