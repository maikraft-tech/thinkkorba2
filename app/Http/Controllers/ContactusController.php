<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; 

class ContactusController extends Controller
{
    //
    public function getAbout(){
        $data = [];
        
    }

    public function postContact(Request $request){
        $this->validate($request, [
            'email' =>'required|email',
            'message' =>'min:10',
            'username' =>'required|username'
            ]);

        Mail::send();
    }
}
