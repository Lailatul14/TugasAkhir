<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //

    public function index(){
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
            return view('welcome');
        }
    }


       public function dashboard(){
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
            return view('tampilan/dashboard');
        }
    }

    
}
?>