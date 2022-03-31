<?php

namespace App\Http\Controllers;
use App\Models\video;
class VideoController extends Controller
{
    public function index()
    {
        $videos=video::all();
        
         
       // dd($videos);
        return $videos;

//        $videos=['A','B','C','D'];
//        return view('videos',['videos'=>$videos,'is_admin'=>false]);
    }
    public function best(){
        echo "hello from best";
    }
}
