<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
        public function index()
        {

            return "Hello";
           $post = new Post;
           $data = $post->data();
//           echo "<pre>";
//           print_r($data);
//           echo "</pre>";
//           exit;
           return view('post',compact('data'));
        }
}
