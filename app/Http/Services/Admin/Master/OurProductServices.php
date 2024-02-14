<?php
namespace App\Http\Services\Admin\Master;

use App\Http\Repository\Admin\Master\OurProductRepository;

use App\LocationAddress;
use Carbon\Carbon;


class OurProductServices{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct(){
        $this->repo = new OurProductRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addAll($request) {
        try {
            $add_Incidenttype = $this->repo->addAll($request);
            if ($add_Incidenttype) {
                return ['status' => 'success', 'msg' => 'Product Category Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Product Category Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function getById($id){
        try {
            return $this->repo->getById($id);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateAll($request){
        try {
// dd($request);
            $update_Incidenttype = $this->repo->updateAll($request);
            // dd($update_Incidenttype);
            if ($update_Incidenttype) {
                return ['status' => 'success', 'msg' => 'Product Category Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Product Category Not Updated.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function deleteById($id){
        try {
            $delete = $this->repo->deleteById($id);
            if ($delete) {
                return ['status' => 'success', 'msg' => 'Deleted Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Not Deleted.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        } 
    }
   
    public function updateOne($id)
    {
        return $this->repo->updateOne($id);
    }


}