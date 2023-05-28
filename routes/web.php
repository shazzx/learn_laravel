<?php

namespace App\Enums;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\Practice;
use App\Http\Controllers\User;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Models\Users;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::match(['get'], '/practice', [Practice::class, 'index']);
// Route::any('/practice', [Practice::class, 'index']);

//REDIRECT SHORTCUT
// Route::redirect('/{s}', 'status');
// Route::get('/', [Practice::class, 'index']);

//VIEW SHORTCUT
// Route::view('/', 'home', ['status' => "404"]);

//#ROUTE PARAMETERS
//required parameters
// Route::get('/user/{id}', function(string $id){
//     return 'User '.$id;
// });

//optional parameters
// Route::get('/user/{id?}', function(string $id = '0'){
//     return 'User '.$id;
// });

//regualr expression contraints
// Route::get('/user/{id}', function($id){
//     return "User ". $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{name}', function($name){
//     return "User ". $name;
// })->where('name', '[A-Z 0-9 a-z]+');

//helper methods
// Route::get('/user/{id}', function($id){
//     return "USER " . $id;
// });

//global constraints

//encoded forward slashes
// Route::get('/user/{search}', function(string $search){
//     return $search;
// });

//#NAMED ROUTES
//- SHOULD BE ALWAYS UNIQUE

//simple
// Route::get('/user', function(){
//     return redirect()->route('home');
// });
// Route::get('/', function(){
//     return "welcome to home";
// })->name('home');

//additional parameters in route method will convert into query strings
// Route::get('/home/{id}', function(Request $request, $id){
//         return redirect()->route('user', ["id" => $id, "username" => "shazz"]);
    
// });

// Route::get('/user/{id}', function(Request $request, $id){
//     if($request->route()->named('profile')){
//     return "USER ID ". $id;
//     }
// })->name('user');

//#ROUTE GROUPS

//subdomain routing
// Route::domain('/shazz')->group(function(){
//     Route::get('/user', function(){
//         return 'user 1';
//     });
// });

//ROUTE PREFIXES
// Route::prefix('admin')->group(function() {
//     Route::get('/users', function() {
//         return 'user';
//     });

//     Route::get('/user/profile', function() {
//         return 'user profile';
//     });
// });

//ROUTE NAME PREFIXES
//-trailing . recommended
// Route::name("admin.")->group(function(){
//     Route::get('/user/{id}', function($id) {
//         return 'user ' . $id;
//     });
// });

//ROUTE MODEL BINDING

//implicit binding

// Route::get('/users/{user}', function(Users $user){
//     return $user->username;
// });

//soft deleted

// Route::get('/users/{user}', function(Users $user){
//     return $user->username;
// })->withTrashed();

//customiing missing model behavriour

// Route::get('/', function() {
//     return '/home';
// });

// Route::get('/users/{users}', function(Users $users){
//     return $users;
// })->missing(function (){
//     return redirect('/');
// });

//IMPLICIT ENUM BINDING

// enum User: string{
//     case Shazz = 'shazz';
//     case Shahzad = 'shahzad';
// }
// Route::get('/users/{user}', function(User $user){
//     return $user->value;
// });

//FALLBACK ROUTING

// Route::fallback(function(){
//     return '404-';
// });

//RATE LIMITINGS
//Defining Rate Limiters
// Route::get('/', function(){
//     return "home";
// })->withoutMiddleware(EnsureTokenIsValid::class);

//Implicit specific Middleware
// Route::get('/user/{name}', function($name){
//     return 'user ' . $name;
// })->middleware('verified_user');

//exluding middleware

// Route::middleware('valid_user')->prefix('/user')->group(function(){
//     Route::get('/{name}', function($name){
//         return $name;

//     });
//     Route::get('/id/{id}', function($id){
//         return $id;
//     });
// });

//CSRF PROTECTION

// Route::get('/home', function(Request $request){
//     csrf_token();
//     // $request->session()->token();

//     return "home";
// });

// Route::post('/user', function(Request $request){
//     return $request->input('username');
// });

//CONTROLLERS

// Route::get('/user/{id}', [User::class, "show"]);
// Route::post('/user/create', [User::class, 'createUser']);


//SINGLE RESOURCE
// Route::resource('user', UserController::class);

//MULTIPLE RESOURCE CONTROLLERS
// Route::resources([
//     'user' => UserController::class,
//     'user/api' => UserController::class
// ]);


//Customizing Missing Model Behavior
// Route::resource('user', UserController::class)->missing(function(Request $request){
//     return Redirect::route('users.index');
// });

//Soft Deleted Models
// Route::resource('user', UserController::class)->withTrashed(['show']);


//Partial Resource Routes

// Route::resource('user', UserController::class)->only([
//     'index', 'show', 'store', 'update', 'destroy'
// ]);


// Route::resource('user', UserController::class)->except([
//     'edit', 'create'
// ]);

// Route::apiResource('user/api', UserApiController::class);
// Route::apiResources([
//     'user' => UserController::class,
//     'user/api' => UserController::class
// ]);

// Route::apiResource('user', UserApiController::class)->names([
//     'create' => 'user.create'
// ]);

// Route::apiResource('user', UserApiController::class)->parameters([
//     'user' => 'private_user',
// ]);
