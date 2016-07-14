<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
   	 public function getIndex(){
   	 	return response(view("pages.main"), 200);
   	 }
   	 public function get_login(){
   	 	return response(view("pages.login"), 200);
   	 }
   	 public function get_register(){
         return response(view("pages.register"),200);
       }
}