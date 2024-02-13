<?php
namespace App\Http\Repository\Admin\Master;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	OurProductModel
};

class OurProductRepository{
    public function getAll(){
        try {
            $data_output = OurProductModel::orderBy('updated_at', 'desc')->get();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }


	public function addAll($request){
        try {
            $incidenttype_data = new OurProductModel();
            $incidenttype_data->product_name  = $request['product_name'];
            $incidenttype_data->product_title  = $request['product_title'];
            $incidenttype_data->product_description  = $request['product_description'];
          
            $incidenttype_data->save();       
                
            return $incidenttype_data;

        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }
    public function getById($id){
        try {
            $incidenttype = OurProductModel::find($id);
            if ($incidenttype) {
                return $incidenttype;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by Id Solution Type.',
                'status' => 'error'
            ];
        }
    }
    public function updateAll($request){
        try {
            $incidenttype_data = OurProductModel::find($request->id);
            
            if (!$incidenttype_data) {
                return [
                    'msg' => 'Solution data not found.',
                    'status' => 'error'
                ];
            }
        // Store the previous image names
            $incidenttype_data->product_name = $request['product_name'];
            $incidenttype_data->product_title  = $request['product_title'];
            $incidenttype_data->product_description  = $request['product_description'];
            // $incidenttype_data->url = $request['url'];
            $incidenttype_data->save();        
        
            return [
                'msg' => 'Solution Type data updated successfully.',
                'status' => 'success'
            ];
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to update Solution Type data.',
                'status' => 'error'
            ];
        }
    }

    public function deleteById($id) {
        try {
            $incidenttype = OurProductModel::find($id);
            if ($incidenttype) {
                // Delete the images from the storage folder
                Storage::delete([
                    'public/images/citizen-action/incidenttype-suggestion/'.$incidenttype->english_image,
                    'public/images/citizen-action/incidenttype-suggestion/'.$incidenttype->marathi_image
                ]);

                // Delete the record from the database
                
                $incidenttype->delete();
                
                return $incidenttype;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateOne($request){
        try {
            $slide = OurProductModel::find($request); 
            if ($slide) {
                $active =  $slide->is_active;
                // dd($active);
                if($active == '1') {
                    OurProductModel::where('id',$request)
                    ->update([
                        'is_active' => '0' 
                    ]); 
                } else {
                    OurProductModel::where('id',$request)
                    ->update([
                        'is_active' => '1'
                    ]); 
                }
               

                return [
                    'msg' => 'Slide updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'Slide not found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update slide.',
                'status' => 'error'
            ];
        }
    }
    
       
}