<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
    return view('admin.login');
});


Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
    Route::get('/change-password', ['as' => '/change-password', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\ChangePassword@index']);
    Route::post('/update-password', ['as' => '/update-password', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\ChangePassword@updatePassword']);
    Route::get('/edit-user-profile', ['as' => 'edit-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@editUsersProfile']);

    Route::post('/update-user-profile', ['as' => 'update-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

    Route::post('/website-contact', ['as' => 'website-contact', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

// =============About Us============
    Route::get('/list-aboutus', ['as' => 'list-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@index']);
    Route::get('/add-aboutus', ['as' => 'add-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@add']);
    Route::post('/add-aboutus', ['as' => 'add-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@store']);
    Route::get('/edit-aboutus/{edit_id}', ['as' => 'edit-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@edit']);
    Route::post('/update-aboutus', ['as' => 'update-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@update']);
    Route::post('/show-aboutus', ['as' => 'show-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@show']);
    Route::post('/delete-aboutus', ['as' => 'delete-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@destroy']);
    Route::post('/update-active-aboutus', ['as' => 'update-active-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@updateOne']);
  

    Route::get('/list-animated-video', ['as' => 'list-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@index']);
    Route::get('/add-animated-video', ['as' => 'add-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@add']);
    Route::post('/add-animated-video', ['as' => 'add-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@store']);
    Route::get('/edit-animated-video/{edit_id}', ['as' => 'edit-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@edit']);
    Route::post('/update-animated-video', ['as' => 'update-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@update']);
    Route::post('/show-animated-video', ['as' => 'show-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@show']);
    Route::post('/delete-animated-video', ['as' => 'delete-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@destroy']);
    Route::post('/update-active-animated-video', ['as' => 'update-active-animated-video', 'uses' => 'App\Http\Controllers\Admin\Home\AnimatedVideoController@updateOne']);
  

  // =============Product============
  Route::get('/list-product', ['as' => 'list-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@index']);
  Route::get('/add-product', ['as' => 'add-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@add']);
  Route::post('/add-product', ['as' => 'add-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@store']);
  Route::get('/edit-product/{edit_id}', ['as' => 'edit-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@edit']);
  Route::post('/update-product', ['as' => 'update-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@update']);
  Route::post('/show-product', ['as' => 'show-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@show']);
  Route::post('/delete-product', ['as' => 'delete-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@destroy']);
  Route::post('/update-active-product', ['as' => 'update-active-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@updateOne']);

    // ============Marquee=============
    Route::get('/list-marquee-tab', ['as' => 'list-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@index']);
    Route::get('/add-marquee-tab', ['as' => 'add-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@add']);
    Route::post('/add-marquee-tab', ['as' => 'add-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@store']);
    Route::get('/edit-marquee-tab/{edit_id}', ['as' => 'edit-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@edit']);
    Route::post('/update-marquee-tab', ['as' => 'update-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@update']);
    Route::post('/show-marquee-tab', ['as' => 'show-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@show']);
    Route::post('/delete-marquee-tab', ['as' => 'delete-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@destroy']);
    Route::post('/update-one-marquee-tab', ['as' => 'update-one-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@updateOne']);
    
     Route::get('/list-courses', ['as' => 'list-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@index']);
    Route::get('/add-courses', ['as' => 'add-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@add']);
    Route::post('/add-courses', ['as' => 'add-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@store']);
    Route::get('/edit-courses/{edit_id}', ['as' => 'edit-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@edit']);
    Route::post('/update-courses', ['as' => 'update-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@update']);
    Route::post('/show-courses', ['as' => 'show-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@show']);
    Route::post('/delete-courses', ['as' => 'delete-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@destroy']);
    Route::post('/update-active-courses', ['as' => 'update-active-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@updateOne']);


 
    // ==============media============
    Route::get('/list-media', ['as' => 'list-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@index']);
    Route::get('/add-media', ['as' => 'add-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@add']);
    Route::post('/add-media', ['as' => 'add-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@store']);
    Route::get('/edit-media/{edit_id}', ['as' => 'edit-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@edit']);
    Route::post('/update-media', ['as' => 'update-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@update']);
    Route::post('/show-media', ['as' => 'show-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@show']);
    Route::post('/delete-media', ['as' => 'delete-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@destroy']);
    Route::post('/update-active-media', ['as' => 'update-active-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@updateOne']);

    // Admission=================
    Route::get('/list-application-form', ['as' => 'list-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@index']);
    Route::post('/show-application-form', ['as' => 'show-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@show']);
    Route::post('/delete-application-form', ['as' => 'delete-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@destroy']);

    Route::get('/list-scolarship-form', ['as' => 'list-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@index']);
    Route::post('/show-scolarship-form', ['as' => 'show-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@show']);
    Route::post('/delete-scolarship-form', ['as' => 'delete-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@destroy']);

    Route::get('/list-fesspayment-form', ['as' => 'list-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@index']);
    Route::post('/show-fesspayment-form', ['as' => 'show-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@show']);
    Route::post('/delete-fesspayment-form', ['as' => 'delete-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@destroy']);

    // ===============Contact 
    Route::get('/list-contactus-form', ['as' => 'list-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@index']);
    Route::post('/show-contactus-form', ['as' => 'show-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@show']);
    Route::post('/delete-contactus-form', ['as' => 'delete-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@destroy']);

    // vision-mission
    Route::get('/list-vision-mission', ['as' => 'list-vision-mission', 'uses' => 'App\Http\Controllers\Admin\About\VisionMissionController@index']);
    Route::get('/add-vision-mission', ['as' => 'add-vision-mission', 'uses' => 'App\Http\Controllers\Admin\About\VisionMissionController@add']);
    Route::post('/add-vision-mission', ['as' => 'add-vision-mission', 'uses' => 'App\Http\Controllers\Admin\About\VisionMissionController@store']);
    Route::get('/edit-vision-mission/{edit_id}', ['as' => 'edit-vision-mission', 'uses' => 'App\Http\Controllers\Admin\About\VisionMissionController@edit']);
    Route::post('/update-vision-mission', ['as' => 'update-vision-mission', 'uses' => 'App\Http\Controllers\Admin\About\VisionMissionController@update']);
    Route::post('/show-vision-mission', ['as' => 'show-vision-mission', 'uses' => 'App\Http\Controllers\Admin\About\VisionMissionController@show']);
   
    // ==============media============
    Route::get('/list-product-services', ['as' => 'list-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@index']);
    Route::get('/add-product-services', ['as' => 'add-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@add']);
    Route::post('/add-product-services', ['as' => 'add-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@store']);
    Route::get('/edit-product-services/{edit_id}', ['as' => 'edit-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@edit']);
    Route::post('/update-product-services', ['as' => 'update-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@update']);
    Route::post('/show-product-services', ['as' => 'show-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@show']);
    Route::post('/delete-product-services', ['as' => 'delete-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@destroy']);
    Route::post('/update-active-product-services', ['as' => 'update-active-product-services', 'uses' => 'App\Http\Controllers\Admin\ProductServices\ServicesController@updateOne']);



    // ===============Our Products By Nandan 


    Route::get('/list-our-products', ['as' => 'list-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@index']);
    Route::get('/add-our-products', ['as' => 'add-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@add']);
    Route::post('/add-our-products', ['as' => 'add-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@store']);
    Route::get('/edit-our-products/{edit_id}', ['as' => 'edit-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@edit']);
    Route::post('/update-our-products', ['as' => 'update-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@update']);
    Route::post('/show-our-products', ['as' => 'show-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@show']);
    Route::post('/delete-our-products', ['as' => 'delete-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@destroy']);
    Route::post('/update-active-our-products', ['as' => 'update-active-our-products', 'uses' => 'App\Http\Controllers\Admin\Master\OurProductController@updateOne']);


// ===============Our Products Details By Nandan 


    Route::get('/list-our-products-details', ['as' => 'list-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@index']);
    Route::get('/add-our-products-details', ['as' => 'add-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@add']);
    Route::post('/add-our-products-details', ['as' => 'add-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@store']);
    Route::get('/edit-our-products-details/{edit_id}', ['as' => 'edit-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@edit']);
    Route::post('/update-our-products-details', ['as' => 'update-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@update']);
    Route::post('/show-our-products-details', ['as' => 'show-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@show']);
    Route::post('/delete-our-products-details', ['as' => 'delete-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@destroy']);
    Route::post('/update-active-our-products-details', ['as' => 'update-active-our-products-details', 'uses' => 'App\Http\Controllers\Admin\Home\OurProductDetailsController@updateOne']);





    Route::get('/db-backup', ['as' => 'db-backup', 'uses' => 'App\Http\Controllers\DBBackup\DBBackupController@downloadBackup']);
    Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});
    Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
    Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);
// website====================================================================
    Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
    //About Us========
    Route::get('/aboutus', ['as' => 'aboutus', 'uses' => 'App\Http\Controllers\Website\AboutUs\VisionMissionController@index']);
 
    //Start Application========
    Route::get('/media', ['as' => 'media', 'uses' => 'App\Http\Controllers\Website\Media\MediaController@getAllMedia']);
    // Route::get('/product', ['as' => 'product', 'uses' => 'App\Http\Controllers\Website\Product\ProductController@index']);
    Route::get('/services', ['as' => 'services', 'uses' => 'App\Http\Controllers\Website\ProductServices\ProductServicesController@index']);
    Route::get('/product', ['as' => 'product', 'uses' => 'App\Http\Controllers\Website\Product\ProductController@services']);
    Route::post('/list-our-services-ajax', ['as' => 'list-our-services-ajax', 'uses' => 'App\Http\Controllers\Website\Product\ProductController@listServicesAjax']);
    

    
    //End Application========


   
    // Route::post('/particular-upcoming-courses', ['as' => 'particular-upcoming-courses', 'uses' => 'App\Http\Controllers\Website\IndexController@showParticularUpcominCourses']);


    //Start Contact========
    Route::get('/contactus', ['as' => 'contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@getContactUs']);
    Route::post('/add-contactus', ['as' => 'add-contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@addContactUs']);
    //Start Contact========
    
    // Route::get('/gallery', ['as' => 'gallery', 'uses' => 'App\Http\Controllers\Website\Gallery\GalleryController@getAllMultimedia']);
    Route::post('/list-ajax-multimedia-web', ['as' => 'list-ajax-multimedia-web', 'uses' => 'App\Http\Controllers\Website\Gallery\OurResultController@getAllAjaxMultimedia']);