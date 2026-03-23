<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Topic-Controller
//Here class is made and object or method will be created under it.
// Here pagecontroller inherit the property of controller because it is child class and controller is parent class.
class PageController extends Controller
{
  public function  showHome(){
    return view('welcome');
  }

   public function  showUser(string $id){
    return view('user', ['values'=>$id]);
  }

   public function  showBlog(){
    return view('blog');
  }
}
