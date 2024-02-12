<?php
namespace App\Http\Services\Website\Product;

use App\Http\Repository\Website\Product\ProductRepository;

// use App\Marquee;
use Carbon\Carbon;


class ProductServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct(){
        $this->repo = new ProductRepository();
    }

        public function getAllProduct(){
    try {
        return $this->repo->getAllProduct();
    } catch (\Exception $e) {
        return $e;
    }
    }   
}