<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

//load form request (for validation)
use App\Http\Requests\Register;
use App\Http\Requests\ResetPassword;



class AuthController extends Controller
{
    public function index()
    {
        return view('login/login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            if(Auth::user()->email_verified_at and true){
                return redirect()->route('compotitions.index');
            }else{
                return redirect()->route('verifikasi.index');
            }
        }else{
            return redirect('/error')->with('notif', " Invalid username or password.");
        }
    }
    public function error()
    {
        return view('login/login');
    }

    public function register(Register $request)
    {
        $register = Http::asForm()->post('http://185.201.9.73/branchsto/public/api/register',[
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->username,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'telepon' => $request->phone,
            'alamat' => $request->address,
        ]);  
        if($register and true){
            Alert::success('Register berhasil.', 'Segera lakukan verifikasi email.')->persistent(true)->autoClose(3600);
            return redirect()->route('login.index');
        }else{
            Alert::info('Register gagal.', 'Silahkan coba kembali.')->persistent(true)->autoClose(3600);
            return redirect()->route('login.index');
        }      
    }

    public function reset_password()
    {
        return view('login.reset-password');
    }

    public function store_reset_password(ResetPassword $request)
    {
        return redirect()->route('login.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }

    public function verifikasi()
    {
        return view('verifikasi/index');
    }
}
