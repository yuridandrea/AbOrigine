<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
	/**
	 * All posts
	 */
    public function index(Request $request) {

		$search = $request->input('search');


		$posts = Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('content', 'LIKE', "%{$search}%")
        ->get();

		// return view('guest.posts.index',compact('posts'));
        return  view('guest.posts.index',compact('posts'));
	}

	/**
	 * Selected Post
	 */
    public function show($slug) {

		$post = Post::where('slug',$slug)->first();

		$categories = Category::All();
		$tags = Tag::All();

		if(!$post) {
			abort(404);
		}
		return view('guest.posts.show',compact('post'),compact('categories'),compact('tags'));
	}
}
