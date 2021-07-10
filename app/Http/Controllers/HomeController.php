<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class HomeController extends Controller
{
    public function index(){
      $data = [
        'posts' => Post::all()
      ];
      return view('guest.home', $data);
    }

    public function about(){
      return view('about');
    }
}
