<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;   

class Register extends Model
{

    protected $table="register_users";

    
    public static function formstore($data){
        
        //var_dump($data);

        

        $username=Input::get('username');
        //echo $username;
        $email=Input::get('email');
       // echo $email;
        $password=Hash::make(Input::get('password'));
       // echo $password;

       $users=new Register();

       $users->name=$username;
       $users->email=$email;
       $users->password=$password;

       $users->save();
    }
}
