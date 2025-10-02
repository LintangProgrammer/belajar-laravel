<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
// import Model Post

class PostController extends Controller
{
    //daftar post
    public function index()
    {
        // menampilkan semua data dari model post
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}