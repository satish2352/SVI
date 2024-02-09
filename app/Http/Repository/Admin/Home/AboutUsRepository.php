<?php
namespace App\Http\Repository\Admin\Home;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    AboutUs
};
use Config;

class AboutUsRepository  {

    public function getAll(){
        try {
            $data_output = AboutUs::orderBy('updated_at', 'desc')->get();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addAll($request){
        try {
            $dataOutput = new AboutUs();
            $dataOutput->video_link  = $request['video_link'];
            $dataOutput->description  = $request['description'];
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
            $dataOutputByid = AboutUs::find($id);
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
            $dataOutput = AboutUs::find($request->id);
            
            if (!$dataOutput) {
                return [
                    'msg' => ' Data not found.',
                    'status' => 'error'
                ];
            }
        // Store the previous image names
            $dataOutput->video_link = $request['video_link'];
            $dataOutput->description  = $request['description'];

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
            $updateOutput = AboutUs::find($request); // Assuming $request directly contains the ID

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
                $deleteDataById = AboutUs::find($id);
                if ($deleteDataById) {
                    if (file_exists_view(Config::get('DocumentConstant.AboutUs_DELETE') . $deleteDataById->image)){
                        removeImage(Config::get('DocumentConstant.AboutUs_DELETE') . $deleteDataById->image);
                    }
                    $deleteDataById->delete();
                    
                    return $deleteDataById;
                } else {
                    return null;
                }
            } catch (\Exception $e) {
                return $e;
            }
    }

}