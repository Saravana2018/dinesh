<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class projectcontroller extends Controller
{
    public function projector(Request $request){
    $fname=$request->input('fname');
    $lname=$request->input('lname');
    $email=$request->input('email');
    $gender=$request->input('gender');

    DB::insert("insert into person(firstname,lastname,email,gender)values('$fname','$lname','$email','$gender')");
    return'inserted successfully';
    
}
}
