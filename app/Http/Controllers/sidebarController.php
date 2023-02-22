<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sidebars;
use Hashids\Hashids;

class sidebarController extends Controller
{
    public function index (){
        // $post = sidebars::find(4);
        // $id = $post->hashids; 
        // foreach($pos as $post) {
        //     $id = $post->hashids;
        //     $ids = $post;
        // }
        // $blogs = sidebars::all();
        // $id = '619332782';
        $data = sidebars::where('role', '=', 'kurikulum')->get();       
        // echo $data;   
        // $hashids = new Hashids();
        // $id = $hashids->encode($id);
        // var_dump($id);
        // exit();
        json_encode($data);
        return view('temp.v_nav',['data' => $data]);
    }
}
