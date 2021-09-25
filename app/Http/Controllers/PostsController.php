<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
   public function __construct(){
   $this->middleware("auth");
   }
   
    public function create(){
        return view ("posts.create");
    }

    public function store (){
       $d = request()->validate([
           "caption"=> "required",
           "image"=>"required"
       ]);
       $p = request("image")->store("upload","public");
            
 /*auth()->user()->posts()->create([
    "caption" =>$d["caption"],
    "image" => $p,]);*/
    User::find(auth()->user()->id)->posts()-> create([
           "caption" =>$d["caption"],
           "image" => $p,
           
       ]);
       
     
       
       return redirect ("profile"."/".auth()->user()->id);
    }

    public function show(\App\Models\Post $post_id){
       return view("posts.show",["post"=>$post_id]);
    }
}
