<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    public $firstname="";
    public $lastname="";
    public function awalun(){
        return view('form');
    }

    public function akhirun(Request $request){
        //$input = Input::only('firstname','lastname');
        $firstname =$request->input("firstname");
        $lastname = $request->input("lastname");
        return view('welcomex',["firstname"=>$firstname,"lastname"=>$lastname]);
    }
}
