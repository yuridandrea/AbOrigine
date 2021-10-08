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
    public function index() {
		$posts = Post::All();

		$posts_search = Post::query();
        if (request('term')) {
            $posts_search->where('title', 'Like', '%' . request('term') . '%');
        }

		$search_results = $posts_search->orderBy('id', 'DESC')->paginate(10);

		//if(request('term')) 
		dump($search_results);

		// return view('guest.posts.index',compact('posts'));
        return  view('guest.posts.index',compact('posts'),compact('search_results'));
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
