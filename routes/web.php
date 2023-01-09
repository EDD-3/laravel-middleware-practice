<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', function () {

    $user = Auth::user();

    if($user->isAdmin()) {
        return "User is administrator";
    }
    // return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



// Using our custom Role middleware from App\Http\Middleware\RoleMiddleware

Route::get('/admin/user/roles',[ 'middleware' => ['role', 'auth', 'web'], function (){
    
    return "Middleware role";

}]);