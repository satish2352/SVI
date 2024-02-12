<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Home\AboutUsServices;
use Session;
use Validator;
use Config;

class AboutUsController extends Controller
{
    public function __construct(){
        $this->service = new AboutUsServices();
        }
        public function index(){
            try {
                $getOutput = $this->service->getAll();
                return view('admin.pages.home.aboutus.list-aboutus', compact('getOutput'));
            } catch (\Exception $e) {
                return $e;
            }
        }    
        public function add(){
            return view('admin.pages.home.aboutus.add-aboutus');
        }
        public function store(Request $request){
            $rules = [
                'description' => 'required',
                'video_link' => 'required',
               
            ];
            $messages = [    
                'description.required' => 'The image is required.',
                'video_link.required' => 'Upload Video.',
               
            ];
    
            try {
                $validation = Validator::make($request->all(), $rules, $messages);
                
                if ($validation->fails()) {
                    return redirect('add-aboutus')
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $add_record = $this->service->addAll($request);
    
                    if ($add_record) {
                        $msg = $add_record['msg'];
                        $status = $add_record['status'];
    
                        if ($status == 'success') {
                            return redirect('list-aboutus')->with(compact('msg', 'status'));
                        } else {
                            return redirect('add-aboutus')->withInput()->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect('add-aboutus')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
      
        public function show(Request $request){
            try {
                $showData = $this->service->getById($request->show_id);
                return view('admin.pages.home.aboutus.show-aboutus', compact('showData'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function edit(Request $request){
            $edit_data_id = base64_decode($request->edit_id);
            $editData = $this->service->getById($edit_data_id);
           
            return view('admin.pages.home.aboutus.edit-aboutus', compact('editData'));
        }

        public function update(Request $request){
            $rules = [
                'description' => 'required',
                // 'video_link' => 'required',
                
            ];
    
            if($request->has('video_link')) {
                $rules['video_link'] = 'required';
            }
            $messages = [   
                'description.required'=>'Please enter description.',
                'video_link.required' => 'Please  upload video upload.',
                             
            ];
    
            try {
                $validation = Validator::make($request->all(),$rules, $messages);
                if ($validation->fails()) {
                    return redirect()->back()
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $update_data = $this->service->updateAll($request);
                    if ($update_data) {
                        $msg = $update_data['msg'];
                        $status = $update_data['status'];
                        if ($status == 'success') {
                            return redirect('list-aboutus')->with(compact('msg', 'status'));
                        } else {
                            return redirect()->back()
                                ->withInput()
                                ->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect()->back()
                    ->withInput()
                    ->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
       
        public function updateOne(Request $request){
            try {
                $active_id = $request->active_id;
            $result = $this->service->updateOne($active_id);
                return redirect('list-aboutus')->with('flash_message', 'Updated!');  
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function destroy(Request $request){
            try {
                $delete_record = $this->service->deleteById($request->delete_id);
                if ($delete_record) {
                    $msg = $delete_record['msg'];
                    $status = $delete_record['status'];
                    if ($status == 'success') {
                        return redirect('list-aboutus')->with(compact('msg', 'status'));
                    } else {
                        return redirect()->back()
                            ->withInput()
                            ->with(compact('msg', 'status'));
                    }
                }
            } catch (\Exception $e) {
                return $e;
            }
        } 
}
