<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    public function index()
    {
        return view('otentikasi.login');
    }

    public function login(Request $request)
    {
        $data = User::where('email', $request->email)->first();

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if($data)
        {
            if(Hash::check($request->password, $data->password))
            {
                Session(['admin'=>true]);
                $request->session()->put('email', $data->email);
                return redirect('/dashboard');
            }
        }
        return redirect('/')->with('message','Email atau Password salah');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/');
    }
}
