<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Models\Hello; // Very important to import the model here
class HelloWorld extends Controller 
{ 
  public function sayHello() 
  { 
    return view('hello', ["message" => Hello::helloWorldMessage()]); 
  } 
} 

