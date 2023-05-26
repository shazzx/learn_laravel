<?php

namespace App\Enums;
use App\Http\Controllers\Practice;
use App\Models\Users;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function(){
    return 'hello';
});