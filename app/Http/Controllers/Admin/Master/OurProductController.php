<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SolutionModel;
use App\Http\Services\Admin\Master\OurProductServices;
use Validator;
use Illuminate\Validation\Rule;

class OurProductController extends Controller
{
    public function __construct()
    {
        $this->service = new OurProductServices();
    }
    public function index()
    {
        try {
            $incidenttype_data = $this->service->getAll();
            return view('admin.pages.master.our-products.list-product-category', compact('incidenttype_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function add()
    {
        return view('admin.pages.master.our-products.add-product-category');
    }

    public function store(Request $request) {

        $rules = [
            'product_name' => 'required|unique:our_product|max:255',
            'product_title' => 'required|max:255',
            'product_description' => 'required',
         ];
        $messages = [   
            'product_name.required'       =>  'Please enter category name.',
            'product_name.unique' => 'Title already exist.',
            'product_title.required'       =>  'Please enter title.',
            'product_description.required'       =>  'Please enter description.',
       
        ];

        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('add-our-products')
                    ->withInput()
                    ->withErrors($validation);
            }
            else
            {
                $add_incidenttype_data = $this->service->addAll($request);
                if($add_incidenttype_data)
                {

                    $msg = $add_incidenttype_data['msg'];
                    $status = $add_incidenttype_data['status'];
                    if($status=='success') {
                        return redirect('list-our-products')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('add-our-products')->withInput()->with(compact('msg','status'));
                    }
                }

            }
        } catch (Exception $e) {
            return redirect('add-our-products')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    
    public function edit(Request $request)
    {
        $edit_data_id = base64_decode($request->edit_id);
        $incidenttype_data = $this->service->getById($edit_data_id);
        return view('admin.pages.master.our-products.edit-product-category', compact('incidenttype_data'));
   
    }
   

    public function update(Request $request)
{
    $id = $request->input('id'); // Assuming the 'id' value is present in the request
    $rules = [
        'product_name' => ['required', 'max:255', Rule::unique('our_product', 'product_name')->ignore($id, 'id')],
        'product_title' => 'required|max:255',
        'product_description' => 'required',
    ];

    $messages = [
        'product_name.required' => 'Please enter an title.',
        // 'product_name.regex' => 'Please  enter text only.',
        // 'product_name.max' => 'Please enter an  title with a maximum of 255 characters.',
        'product_name.unique' => 'The title already exists.',
        'product_title.required'       =>  'Please enter title.',
        'product_description.required'       =>  'Please enter description.',
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
                    return redirect('list-our-products')->with(compact('msg', 'status'));
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

    public function show(Request $request)
    {
        try {
            $incidenttype_data = $this->service->getById($request->show_id);
            return view('admin.pages.master.our-products.show-product-category', compact('incidenttype_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateOne(Request $request){
        try {
            $active_id = $request->active_id;
        $result = $this->service->updateOne($active_id);
            return redirect('list-our-products')->with('flash_message', 'Updated!');  
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function destroy(Request $request){
        try {
            $incidenttype_data = $this->service->deleteById($request->delete_id);
            if ($incidenttype_data) {
                $msg = $incidenttype_data['msg'];
                $status = $incidenttype_data['status'];
                if ($status == 'success') {
                    return redirect('list-our-products')->with(compact('msg', 'status'));
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
