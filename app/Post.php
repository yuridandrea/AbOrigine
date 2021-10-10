<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','slug','user_id','category_id','image', 'image_url','alt','abstract'];

	/**
	 * ! Post<N1>User !
	 * 
	 * Ogni Post appartiene a 1 User
	 * >>> user() singolare
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * ! Post<N1>Category !
	 * 
	 * Ogni Post appartiene a 1 Category
	 * >>> category() singolare
	 */
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	/**
	 * ! Post<NM>Tag !
	 * 
	 * Ogni Post appartiene a molti Tag
	 * >>> tags() plurale
	 */
	public function tags()
	{
		/**
		 * se la pivot table si chiamasse tag_post
		 * return $this->belongsToMany('App\Tag');
		 */ 
		return $this->belongsToMany('App\Tag', 'tags_posts');
	}

	// public function comments()
    // {
    //     return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    // }
}
