<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('/login');
    }

    public function auth(Request $request) {
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validasi)) {
            return redirect('/home');
        }else{
            return back()->withErrors([
                'email'=>'maaf, email anda salah',
            ]);
        }
        return redirect()->back()->with('pesan', 'mohon maaf login anda gagal');
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function home() {
        return view('/home');
    }
    public function rekomendasi(){
        return view('/rekomendasi');
    }
    public function tampilanbuku1() {
        return view('/tampilanbuku1');
    }
    public function tampilanbuku2() {
        return view('/tampilanbuku2');
    }
    public function pengaturan() {
        return view('/pengaturan');
    }
    public function buku() {
        return view('/buku');
    }
    public function favorite() {
        return view('/favorite');
    }
    public function tampilanbuku3() {
        return view('/tampilanbuku3');
    }
    public function tampilanfavorite1() {
        return view('/tampilanfavorite1');
    }
    public function tampilanbuku4() {
        return view('tampilanbuku4');
    }
}
