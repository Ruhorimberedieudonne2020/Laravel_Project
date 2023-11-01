<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Http\Controllers\Controller\Error;

class FormProcess extends Controller
{
    public function ReceiveData( Request $req ){
        $email=$req['email'];
       $username=$req['username'];
      return view('profile', compact('username','email')); 
}
    public function SaveIntoDB( Request $req ){
        $email=$req['email'];
       $username=$req['username'];
       $client=new Clients();
       $client->email=$email;
       $client->username=$username;
       $client->save();
       
        echo"Data inserted successfully";
       }

    

}