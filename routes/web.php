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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function(){
    return view('test');

   
});

Route::get('/hello',function(){
    echo "Hello";

});
Route::get('/fruits',function(){

    echo "Apple";
    });
//Route::get('/{name}/{id?}',function($name,$id=null){
  //  $data=compact('name','id');
 //   print_r($data);
   // return view('/demo')->with($data);
//});
    
Route :: get('/',function(){
    return view('/demo');
});

Route :: get('/forloop',function(){
    return view('/forloop');
});
Route :: get('/whileloop',function(){
    return view('/whileloop');
});
Route :: get('/foreach',function(){
    return view('/foreach');
});
Route :: get('/break',function(){
    return view('/break');
});
Route :: get('/{name}',function($name){
    $data=compact('name');

    return view('/namecheck')->with($data);
});



