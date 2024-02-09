<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Home\AnimatedVideoServices;
use Session;
use Validator;
use Config;

class AnimatedVideoController extends Controller
{
    public function __construct(){
        $this->service = new AnimatedVideoServices();
        }
        public function index(){
            try {
                $getOutput = $this->service->getAll();
                return view('admin.pages.home.animated-video.list-animated-video', compact('getOutput'));
            } catch (\Exception $e) {
                return $e;
            }
        }    
        public function add(){
            return view('admin.pages.home.animated-video.add-animated-video');
        }
        public function store(Request $request){
            $rules = [
                'video_link' => 'required',
                'name' => 'required',
               
            ];
            $messages = [    
                'video_link.required'=>'Please enter video link.',
                'name.required' => 'Please  enter name.',
            ];
    
            try {
                $validation = Validator::make($request->all(), $rules, $messages);
                
                if ($validation->fails()) {
                    return redirect('add-animated-video')
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $add_record = $this->service->addAll($request);
    
                    if ($add_record) {
                        $msg = $add_record['msg'];
                        $status = $add_record['status'];
    
                        if ($status == 'success') {
                            return redirect('list-animated-video')->with(compact('msg', 'status'));
                        } else {
                            return redirect('add-animated-video')->withInput()->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect('add-animated-video')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
        public function show(Request $request){
            try {
                $showData = $this->service->getById($request->show_id);
                return view('admin.pages.home.animated-video.show-animated-video', compact('showData'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function edit(Request $request){
            $edit_data_id = base64_decode($request->edit_id);
            $editData = $this->service->getById($edit_data_id);
           
            return view('admin.pages.home.animated-video.edit-animated-video', compact('editData'));
        }
        public function update(Request $request)
        {
            $id = $request->input('id'); // Assuming the 'id' value is present in the request
            $rules = [
                'video_link' => 'required',
                'name' => 'required',            ];
        
            $messages = [
                'video_link.required'=>'Please enter video link.',
                'name.required' => 'Please  enter name.',
            ];
        
            try {
                $validation = Validator::make($request->all(), $rules, $messages);
                if ($validation->fails()) {
                    return redirect()->back()
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $update_incidenttype_data = $this->service->updateAll($request);
                    // dd($update_incidenttype_data);
                    if ($update_incidenttype_data) {
                        $msg = $update_incidenttype_data['msg'];
                        $status = $update_incidenttype_data['status'];
        
                        if ($status == 'success') {
                            return redirect('list-animated-video')->with(compact('msg', 'status'));
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
                return redirect('list-animated-video')->with('flash_message', 'Updated!');  
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
                        return redirect('list-animated-video')->with(compact('msg', 'status'));
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
