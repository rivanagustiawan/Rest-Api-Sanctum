<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return response()->json($posts, 200);
    }

    public function show($id){
        $posts = Post::where('user_id', $id)->get();

        return response()->json($posts, 200);
        
    }
}
