<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;

class RegisterController extends Controller
{
    

    public function store(){

        $data=Input::except(array('_token'));
        
       // var_dump($data);

       $rule=array(
        'username'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:6',
        'cpassword'=>'required|same:password'
       );

       $message=array(
           'cpassword.required'=>'The confirm password is required',
           'cpassword.min'=>'The confirm password must be at least 6 characters',
           'cpassword.same'=>'The confirm password and the password must be the same',
       );

       $validator=Validator::make($data,$rule,$message);

       if($validator->fails()){
            return Redirect::to('register')->withErrors($validator);
       } else{

           Register::formstore(Input::except(array('_token','cpassword')));

            return Redirect::to('register')->with('success','successfully registered');

        }

    }
}
