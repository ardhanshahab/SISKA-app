<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Hashids\Hashids;


class MahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa.myprofile'); 
    }
    public function myprofile(){
        // $string = 'mahasiswa';
            // $hash = Hash::make($string);
        // if (Hash::check('mahasiswa', $hashids)) {
            // Jika password benar
            return view('mahasiswa.myprofile'); 
            // return "pengguna ".$hashids;
    
        // }else{
        //     // jika password tidak sesuai
        //     return error(404);
    
        // }
    }
}
