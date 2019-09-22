<?php

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

Route::get('/', function () {
    return view('welcome');
});


//Admin

Route::get('/admin', 'AdminController@index');
Route::post('/admin-login', 'SuperAdminController@AdminLogin');
Route::get('/xyz', 'AdminController@XYZ');

Route::post('/admin-register', 'AdminController@AdminRegister');

Route::get('/dashboard', 'SuperAdminController@Dashboard');
Route::get('/admin-logout', 'SuperAdminController@AdminLogout');

//Address

Route::get('/add-address', 'AddressController@index');
Route::post('/insert-address', 'AddressController@InsertAddress');
Route::get('/manage-address', 'AddressController@ManageAddress');
Route::get('/edit-address/{address_id}', 'AddressController@EditAddress');
Route::post('/update-address/{address_id}', 'AddressController@UpdateAddress');

//Phone

Route::get('/add-phone', 'AddressController@AddPhone');
Route::get('/manage-phone', 'AddressController@ManagePhone');
Route::post('/insert-phone', 'AddressController@InsertPhone');
Route::get('/edit-phone/{phone_id}', 'AddressController@EditPhone');
Route::post('/update-phone/{phone_id}', 'AddressController@UpdatePhone');

//Slider

Route::get('/add-slider', 'SliderController@index');
Route::get('/manage-slider', 'SliderController@ManageSlider');
Route::post('/insert-slider', 'SliderController@insertSlider');
Route::get('/add-slider_2', 'SliderController@AddSliderTwo');
Route::post('/insert-slider_two', 'SliderController@InsertSliderTwo');
Route::get('/add-slider_3', 'SliderController@AddSliderThree');
Route::post('/insert-slider_three', 'SliderController@InsertSliderThree');
Route::get('/edit-slider/{slider_id}', 'SliderController@EditSliderOne');
Route::post('/update-slider/{slider_id}', 'SliderController@UpadteSliderOne');
Route::get('/manage-slider_2', 'SliderController@ManageSliderTwo');
Route::get('/delete-slider/{slider_id}', 'SliderController@DeleteSlider');
Route::get('/edit-slider-two/{slider_two_id}', 'SliderController@EditSLiderTwo');
Route::post('/update-slider-two/{slider_two_id}', 'SliderController@UpdateSliderTwo');
Route::get('/manage-slider_3', 'SliderController@ManageSliderThree');
Route::get('/edit-slider-three/{slider_three_id}', 'SliderController@EditSliderThree');
Route::post('/update-slider-three/{slider_three_id}', 'SliderController@UpdateSliderThree');
Route::get('/delete-slider-two/{slider_two_id}', 'SliderController@DeleteSliderTwo');
Route::get('/delete-slider-three/{slider_three_id}', 'SliderController@DeleteSliderThree');
//About
Route::get('/add-goal', 'AboutController@index');
Route::post('/insert-goal', 'AboutController@InsertGoal');
Route::get('/add-ceo', 'AboutController@AddCEO');
Route::post('/insert-ceo', 'AboutController@InsertCEO');
Route::get('/manage-ceo', 'AboutController@ManageCEO');
Route::get('/edit-ceo/{id}', 'AboutController@EditCEO');
Route::post('/update-ceo/{id}', 'AboutController@UpdateCEO');
Route::get('/add-client', 'AboutController@AddClient');
Route::post('/insert-client_testimonial', 'AboutController@InsertTestimonail');

//Client or Testimonial

Route::get('/add-test', 'ClientController@index');
Route::post('/insert-test', 'ClientController@insertTest');



//Project

Route::get('/show-project', 'ProjectController@index');
Route::get('/all-project', 'ProjectController@AllProject');
Route::get('/add-project', 'ProjectController@AddProject');
Route::post('/insert-project', 'ProjectController@InsertProject');
Route::get('/manage-project', 'ProjectController@ManageProject');
Route::get('/edit-project/{project_id}', 'ProjectController@EditProject');
Route::post('/update-project/{project_id}', 'ProjectController@UpdateProject');
Route::get('/delete-project/{project_id}', 'ProjectController@DeleteProject');
Route::get('/add-bg', 'ProjectController@AddBg');
Route::post('/insert-bg', 'ProjectController@InsertBg');
Route::get('/project-details/{project_id}', 'ProjectController@ProjectDetails');


//Service

 Route::get('/add-service', 'ServiceController@index');
 Route::post('/insert-service', 'ServiceController@InsertService');
 Route::get('/manage-service', 'ServiceController@ManageService');
 Route::get('/edit-service/{service_id}', 'ServiceController@EditService');
 Route::post('/update-service/{service_id}', 'ServiceController@UpdateService');
 Route::get('/delete-service/{service_id}', 'ServiceController@DeleteService');

 //blog
  
Route::get('/add-blog', 'PostController@index');
Route::post('/insert-blog', 'PostController@InsertBlog');
Route::get('/manage-blog', 'PostController@ManageBlog');
Route::get('/unpublished_blog/{blog_id}', 'PostController@UnpublishBlog');
Route::get('/published_blog/{blog_id}', 'PostController@PublishBlog');
Route::get('/edit-blog/{blog_id}', 'PostController@EditBlog');
Route::post('/update-blog/{blog_id}', 'PostController@UpdateBlog');
Route::get('/delete-blog/{blog_id}', 'PostController@DeleteBlog');
Route::get('/all-blog_show', 'PostController@AllBlogShow');
Route::get('/blog-details/{blog_id}', 'PostController@BlogDetails');

//Search

Route::get('/blog-search', 'SearchController@BlogSearch');


//appoiment
Route::post('/add-appoitment', 'AboutController@AddAppoitment');
Route::get('/all-appoitment', 'AboutController@AllAppoitment');
Route::get('/delete-appoitment/{id}', 'AboutController@DeleteThis');
Route::get('/success', 'AboutController@Success');

//Contact

Route::get('/contact', 'ContactController@index');
Route::post('/insert-contact', 'ContactController@InsertContact');
Route::get('/all-contact', 'ContactController@AllContact');
Route::get('/delete-contact/{contact_id}', 'ContactController@DeleteContact');
