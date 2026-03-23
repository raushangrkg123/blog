<?php

use Illuminate\Support\Facades\Route;
//Calling pagecontroller file in this route file.
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/test',function(){
    return view('test');
});

// Route::get('/users', function () {
//     $names = [
//         1=>['name'=>'Rkg','phone'=>'3993939399'],
//         2=>['name'=>'dhsd','phone'=>'3993939399']
//            ];
// $names=getUsers();
//     return view('users')
//         ->withAll($names)
//         ->withCity('Delhi');
// });

//Topic- Route to View
// function getUsers(){
//     return [
//       1=>['name'=>'Raushan Kumar','phone'=>'00000000','Emp_id'=>'0303030'],
//       2=>['name'=>'Mohan','phone'=>'00000000','Emp_id'=>'0303030'],
//       3=>['name'=>'Rupak Kumar','phone'=>'00000000','Emp_id'=>'0303030'],
//       4=>['name'=>'Rahat Kumar','phone'=>'00000000','Emp_id'=>'0303030'],
//       5=>['name'=>'Chahat Kumar','phone'=>'00000000','Emp_id'=>'0303030'],
//     ];
// }

// Route::get('/user/{id}', function($id){
//     $users=getUsers();
//     abort_if(!isset($users[$id]),404);
//     $user=$users[$id];
//     return view('user',['id'=>$user]);
// })->name('view.user');
 


//Let's Create a route for pageController
// Route::get('/showuser/{id}',[PageController::class,'showUser'])->name('user');  // here there are 2 parameters / and array and array contains two parameterss 1. pagecontroller class 2. method.
// This route will call to showuser function or method.

Route::controller(PageController::class)->group(function(){
Route::get('/homepage','showHome')->name('home'); 
Route::get('/blog','showBlog')->name('blog');
});


Route::get('/testing',[TestingController::class]);
Route::get('/user',function(){
    return view('/user');
});



