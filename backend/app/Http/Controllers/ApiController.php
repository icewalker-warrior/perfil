<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
   public function profile() {
       return response()->json(\App\User::find(1)->with('contact')->with('skills')->with('experiences')->get());
   }
}
