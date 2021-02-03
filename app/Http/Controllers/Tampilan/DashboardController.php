<?php

namespace App\Http\Controllers\Tampilan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //

    public function index(){
        if(!Session::get('Login/login')){
            return redirect('Login/login');
        }
        else{
            return view('welcome');
        }
    }


       public function dashboard(){
        if(!Session::get('Login/login')){
            return redirect('Login/login');
        }
        else{
            return view('tampilan/dashboard');
        }
    }

    
}
?>