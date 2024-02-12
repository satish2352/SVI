<?php
namespace App\Http\Services\Admin\Home;
use App\Http\Repository\Admin\Home\AboutUsRepository;
use Carbon\Carbon;
use App\Models\ {
    AboutUs
    };

use Config;
class AboutUsServices
{
	protected $repo;
    public function __construct(){
        $this->repo = new AboutUsRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addAll($request)
    {
        try {
            $last_id = $this->repo->addAll($request);
            $path = Config::get('DocumentConstant.ABOUTUS_ADD');
            $ImageName = $last_id['ImageName'];
          
            uploadImage($request, 'video_link', $path, $ImageName);
          
            if ($last_id) {
                return ['status' => 'success', 'msg' => 'Data Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Data get Not Added.'];
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
            $return_data = $this->repo->updateAll($request);
            
            $path = Config::get('DocumentConstant.ABOUTUS_ADD');
            if ($request->hasFile('video_link')) {
                if ($return_data['video_link']) {
                    if (file_exists_view(Config::get('DocumentConstant.ABOUTUS_DELETE') . $return_data['video_link'])) {
                        removeImage(Config::get('DocumentConstant.ABOUTUS_DELETE') . $return_data['video_link']);
                    }

                }
                if ($request->hasFile('video_link')) {
                    $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_video.' . $request->file('video_link')->extension();
                    
                    // Rest of your code...
                } else {
                    // Handle the case where 'image' key is not present in the request.
                    // For example, you might want to skip the file handling or return an error message.
                }                
                // $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->image->extension();
                uploadImage($request, 'video_link', $path, $englishImageName);
                $slide_data = AboutUs::find($return_data['last_insert_id']);
                $slide_data->video_link = $englishImageName;
                $slide_data->save();
            }          
            if ($return_data) {
                return ['status' => 'success', 'msg' => 'Data Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Data  Not Updated.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function updateOne($id){
        return $this->repo->updateOne($id);
    }   
    public function deleteById($id)
    {
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
}