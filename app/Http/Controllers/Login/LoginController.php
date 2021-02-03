<?php

namespace App\Http\Controllers\Login;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\pegawai;
use App\jabatan;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login ControllerA
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
   

    public function index(){
        return view('Login/login');
       
    }


    public function proses(Request $req)
    {
         $username = $req->username;
        $password = $req->password;
        $data = pegawai::where('USERNAME',$username)->first();
        if ($data){
            if ($data->PASSWORD == $password){
                Session::put('login',TRUE);
                if ($data->ID_JABATAN == 'JB0002'){
                    Session::put('admin',TRUE);
                }
                if ($data->ID_JABATAN == 'JB0001'){
                    Session::put('admin',TRUE);
                }

                if ($data->ID_JABATAN == 'JB0003'){
                    Session::put('pelayan',TRUE);
                }

                return redirect('dashboard');
            }
            else{
                return redirect ('login')->with('alert','Password atau email salah');
            }
        }
        else{
            return redirect ('login')->with('alert','Pengguna belum terdaftar');
        }
    }

//         $username = $request->username;
//         $password = $request->password;
//         $data = pegawai::where('USERNAME',$username)->first();
//         if ($data) {
//             if ($data->PASSWORD == $password) {
//                Session::put('login',TRUE);
//                if($data->ID_JABATAN == 'JB0001'){
//                     Session::put('Administrasi',TRUE);
//                    return redirect('dashboard')->with('alert-success','You succses To Login');
//                 }
//                 elseif($data->ID_JABATAN == 'JB0002'){
//                     Session::put('Pemilik',TRUE);
//                     return redirect('dashboard')->with('alert-success','You succses To Login');
//                 }
//             return redirect('dashboard')->with('alert-success','You succses To Login');
//          }
//             else{
//                 return redirect('login')->with('alert','Password atau Email, Salah!!');
//             }
//         }
//         else{
//             return redirect('login')->with('alert','Anda belum terdaftar');
//    } 
// }

public function logout(){
    Session::flush();
    return redirect('login')->with('alert-succes', 'kamu berhasil logout');
}

}
