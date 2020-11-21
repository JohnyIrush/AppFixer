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

//email test
use App\Mail\WelcomeMail; 
Route::get('/email',function(){
return new WelcomeMail();
});

Route::get('/email/send',function(){
    Mail::to('johnydanxin@gmail.com')->send(new WelcomeMail());
    //return new WelcomeMail();
    });
    



Route::get('/', function () {
    return view('App.app');
});

Auth::routes();

//subscribers
Route::get('/subscribers','SubscriberController@store');


//Athentication
    Route::get('/init','App\Http\Controllers\AppFixerController@initialize')->name('init');
    Route::post('/login','App\Http\Controllers\AppFixerController@login')->name('login');
    Route::post('/register','App\Http\Controllers\AppFixerController@register')->name('register');
    Route::post('/logout','App\Http\Controllers\AppFixerController@logout')->name('logout');

    //password resets
    Route::post('forgot/password','Auth\ForgotPasswordController@SendsPasswordResetEmails');
    Route::post('password/reset','Auth\ResetPasswordController@reset');

    //Sign In with Socialite
    Route::get('login/github','Admin\AppFixerController@github');
    Route::get('login/github/redirect','Admin\AppFixerController@githubredirect');

//Products
Route::get('/products','App\Http\Controllers\ProductsController@store');
Route::get('/displayapps','App\Http\Controllers\ProductsController@index');
Route::post('/editapps/{id}','App\Http\Controllers\ProductsController@update');
Route::get('/editapp/{id}','App\Http\Controllers\ProductsController@show');
Route::get('/deleteapp/{id}','App\Http\Controllers\ProductsController@destroy');
Route::get('/services','App\Http\Controllers\ProductsController@services');
Route::get('/versions','App\Http\Controllers\ProductsController@versions');
Route::get('/setversion/{appid}/{versionid}/{versionimage}','App\Http\Controllers\ProductsController@setversion');
Route::get('/setservice/{versionid}/{serviceid}','App\Http\Controllers\ProductsController@setservice');
Route::get('/buyapp/{app}','App\Http\Controllers\ProductsController@buyapp');

//Customers
Route::post('/customer','CustomersController@store');



//paypal
Route::get('payment', 'CheckoutController@payment');
Route::get('cancel', 'CheckoutController@cancel')->name('cancel');
Route::get('success', 'CheckoutController@success')->name('success');

Route::get('/paypal', function(){
    return view('App/paypal');
});
//stripe
Route::get('stripe', 'CheckoutController@stripe')->name('stripe');
Route::post('stripep', 'CheckoutController@stripepayment')->name('stripep');

//posts
Route::get('/posts','App\Http\Controllers\PostController@index');
Route::post('/createpost','App\Http\Controllers\PostController@store'); //create post
Route::get('/showpost/{id}','App\Http\Controllers\PostController@show'); //show post
Route::post('/editpost/{id}','App\Http\Controllers\PostController@edit'); //update post

Route::get('/assigncategory/{postid}/{categoryid}','PostController@assignCategory');
Route::get('/assigntype/{postid}/{typeid}','PostController@assignType');
Route::get('/latest','PostController@latest');

Route::get('/displaypost/{id}','PostController@show');
Route::get('/post_type','PostController@Type');
Route::get('/category_post','PostController@Category');

//shopping cart
Route::get('/shopcart','ProductController@index');
Route::get('/customer_application/{app_id}/{version_id}','ProductsController@buyerApp');


//Social Media Login
Route::get('github','App\Http\Controllers\Social\SocialMediaSigninController@gitHub')->name('github');
Route::get('githubredirect','App\Http\Controllers\Social\SocialMediaSigninController@gitHubRedirect')->name('githubredirect');





