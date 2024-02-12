<?php
namespace App\Http\Services\Website;

use App\Http\Repository\Website\IndexRepository;
// use App\Marquee;
use Carbon\Carbon;


class IndexServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new IndexRepository();
    }

    public function getAllAboutUs()
    {
        try {
            return $this->repo->getAllAboutUs();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getFirstProduct()
    {
        try {
            return $this->repo->getFirstProduct();
        } catch (\Exception $e) {
            return $e;
        }
    } 
}