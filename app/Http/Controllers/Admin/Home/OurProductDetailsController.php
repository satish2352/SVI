<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Home\ProductDetailsServices;
use Session;
use Validator;
use Config;
use App\Models\
{
 OurProductModel,ProductDetails
};

class OurProductDetailsController extends Controller
{ 
    public function __construct(){
        $this->product = new ProductDetailsServices();
    }


    public function index(){
        try {

           $combinedData = ProductDetails::join('our_product', 'product_details.product_id', '=', 'our_product.id')
            ->select('product_details.*', 'our_product.product_name')
            ->orderBy('product_details.id', 'DESC')
            ->get();

            return view('admin.pages.home.product-details.list-our-products-details', compact('combinedData'));
        } catch (\Exception $e) {
            return $e;
        }
    }    


    public function add(){
        $data = OurProductModel::get();
            // dd($data);

        return view('admin.pages.home.product-details.add-our-products-details', ['data' => $data]);
    }

    public function store(Request $request){

        $rules = [
    'title' => 'required|min:7|max:150',
    'product_id' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg|max:10240|min:5',//|dimensions:min_width=100,min_height=100,max_width=5000,max_height=5000',
];

$messages = [
    'title.required' => 'Please enter title.',
    'title.min' => 'Please enter a minimum of 7 characters.',
    'title.max' => 'Please enter a maximum of 150 characters.',
    'image.required' => 'The image is required.',
    'product_id.required' => 'Select at least one option',
    'image.image' => 'The image must be a valid image file.',
    'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
    'image.max' => 'The image size must not exceed 10 MB.',
    'image.min' => 'The image size must not be less than 5 KB.',
    'image.dimensions' => 'The image dimensions must be between 100x100 and 5000x5000 pixels.',
];


    
        try {
            $validation = Validator::make($request->all(), $rules, $messages);
                    
            if ($validation->fails()) {
                return redirect('add-our-products-details')
                    ->withInput()
                    ->withErrors($validation);
            } else {

                $add_record = $this->product->addAll($request);
    
                if ($add_record) {
                    $msg = $add_record['msg'];
                    $status = $add_record['status'];

                    if ($status == 'success') {
                        return redirect('list-our-products-details')->with(compact('msg', 'status'));
                    } else {
                        return redirect('add-our-products-details')->withInput()->with(compact('msg', 'status'));
                    }
                }
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect('add-our-products-details')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    public function show(Request $request){
        try {
            $showData = $this->product->getById($request->show_id);
            return view('admin.pages.home.product-details.show-our-products-details', compact('showData'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function edit(Request $request){
        $data = OurProductModel::where('is_active', true)->get();
        $edit_data_id = base64_decode($request->edit_id);
        $editData = $this->product->getById($edit_data_id);
        
        return view('admin.pages.home.product-details.edit-our-products-details', compact('editData','data'));
    }

    public function update(Request $request){
        $rules = [
            'title' => 'required|min:7|max:150',
            'product_id' => 'required',
        ];

        

        if($request->has('image')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg|max:10240|min:5';//|dimensions:min_width=100,min_height=100,max_width=529,max_height=509';
        }
        
        $messages = [   
            'title.required'=>'Please enter title.',
            'title.min'=>'Please enter minimum 7 character.',
            'title.max'=>'Please enter maximum character upto 150.',
            'image.required' => 'The image is required.',
            'product_id.required' => 'Select the at least one option',
            'image.image' => 'The image must be a valid image file.',
            'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
            'image.max' => 'The image size must not exceed 10 MB.',
            'image.min' => 'The image size must not be less than 5 KB.',
            'image.dimensions' => 'The image dimensions must be between 100x100 and 5000x5000 pixels.',
            
        ];

        try {
            $validation = Validator::make($request->all(),$rules, $messages);
            if ($validation->fails()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $update_data = $this->product->updateAll($request);
                if ($update_data) {
                    $msg = $update_data['msg'];
                    $status = $update_data['status'];
                    if ($status == 'success') {
                        return redirect('list-our-products-details')->with(compact('msg', 'status'));
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
        $result = $this->product->updateOne($active_id);
            return redirect('list-our-products-details')->with('flash_message', 'Updated!');  
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function destroy(Request $request){
        try {
            $delete_record = $this->product->deleteById($request->delete_id);
            if ($delete_record) {
                $msg = $delete_record['msg'];
                $status = $delete_record['status'];
                if ($status == 'success') {
                    return redirect('list-our-products-details')->with(compact('msg', 'status'));
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