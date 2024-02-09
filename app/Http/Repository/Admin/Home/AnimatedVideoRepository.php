<?php
namespace App\Http\Repository\Admin\Home;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    AnimatedVideo
};
use Config;

class AnimatedVideoRepository  {

    public function getAll(){
        try {
            $data_output = AnimatedVideo::orderBy('updated_at', 'desc')->get();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addAll($request){
        try {
            $dataOutput = new AnimatedVideo();
            $dataOutput->name  = $request['name'];
            $dataOutput->video_link  = $request['video_link'];
           
            $dataOutput->save();       
              
            return $dataOutput;

        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }

   
    public function getById($id){
        try {
            $dataOutputByid = AnimatedVideo::find($id);
            if ($dataOutputByid) {
                return $dataOutputByid;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id Data.',
                'status' => 'error'
            ];
        }
    }

    public function updateAll($request){
        try {
            $dataOutput = AnimatedVideo::find($request->id);
            
            if (!$dataOutput) {
                return [
                    'msg' => ' Data not found.',
                    'status' => 'error'
                ];
            }
        // Store the previous image names
        $dataOutput->name  = $request['name'];
        $dataOutput->video_link  = $request['video_link'];

            $dataOutput->save();        
        
            return [
                'msg' => 'Data updated successfully.',
                'status' => 'success'
            ];
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to update Data.',
                'status' => 'error'
            ];
        }
    }
   
    public function updateOne($request){
        try {
            $updateOutput = AnimatedVideo::find($request); // Assuming $request directly contains the ID

            // Assuming 'is_active' is a field in the model
            if ($updateOutput) {
                $is_active = $updateOutput->is_active === 1 ? 0 : 1;
                $updateOutput->is_active = $is_active;
                $updateOutput->save();


                return [
                    'msg' => 'Data Updated Successfully.',
                    'status' => 'success'
                ];
            }
            return [
                'msg' => 'Data not Found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to Update Data.',
                'status' => 'error'
            ];
        }
    }
    public function deleteById($id){
            try {
                $deleteDataById = AnimatedVideo::find($id);
                return $deleteDataById;
            } catch (\Exception $e) {
                return $e;
            }
    }

}