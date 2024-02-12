<?php
namespace App\Http\Services\Admin\Home;
use App\Http\Repository\Admin\Home\AnimatedVideoRepository;
use Carbon\Carbon;
use App\Models\ {
    AnimatedVideo
    };

use Config;
class AnimatedVideoServices
{
	protected $repo;
    public function __construct(){
        $this->repo = new AnimatedVideoRepository();
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
            $path = Config::get('DocumentConstant.ANIMATED_VIDEO_ADD');
            $ImageName = $last_id['ImageName'];
            uploadImage($request, 'video_upload', $path, $ImageName);
        //    dd($path);
        //    die();
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
            
            $path = Config::get('DocumentConstant.ANIMATED_VIDEO_ADD');
            if ($request->hasFile('video_upload')) {
                if ($return_data['video_upload']) {
                    if (file_exists_view(Config::get('DocumentConstant.ANIMATED_VIDEO_DELETE') . $return_data['video_upload'])) {
                        removeImage(Config::get('DocumentConstant.ANIMATED_VIDEO_DELETE') . $return_data['video_upload']);
                    }

                }
                if ($request->hasFile('video_upload')) {
                    $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_video.' . $request->file('video_upload')->extension();
                    
                    // Rest of your code...
                } else {
                    // Handle the case where 'image' key is not present in the request.
                    // For example, you might want to skip the file handling or return an error message.
                }                
                // $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->image->extension();
                uploadImage($request, 'video_upload', $path, $englishImageName);
                $slide_data = AnimatedVideo::find($return_data['last_insert_id']);
                $slide_data->video_upload = $englishImageName;
                $slide_data->save();
            }          
            if ($return_data) {
                return ['status' => 'success', 'msg' => 'Slide Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Slide  Not Updated.'];
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