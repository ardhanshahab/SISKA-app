<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hashids\Hashids;
class MatakuliahController extends Controller
{
    public function index (){
        $id = '619332782';
        $hashids = new Hashids();
        $id = $hashids->encode($id);
        // var_dump($id);
        // exit();
        return view('kurikulum.matakuliah');
    }
    
    public function matakuliah(){

        return view('kurikulum.matakuliah');
    }
    
    public function jadwalMatakuliah(){
        return view('kurikulum.jadwalmatakuliah');   
    }
    
    public function tujuanCapaian(){
        return view('kurikulum.tujuancapaian');
    }
}
