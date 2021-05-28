<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){

      for($i = 0; $i < 10; $i++){
        $new_post = new Post();

        $new_post->title=$faker->sentence(rand(2, 5));
        $new_post->content=$faker->text(rand(200, 300));

        //genera slug
        $slug = str::slug($new_post->title, "-");
        $slug_base = $slug;

        // verifica unicita'
        $post_presente = Post::where('slug', $slug)->first();
        $contatore = 1;
        //select * from Post where slug = slug
        while($post_presente){
          $slug = $slug_base . '-' . $contatore;
          $contatore++;
          $post_presente = Post::where('slug', $slug)->first();
        }

        $new_post->slug = $slug;

        $new_post ->save();
      }
    }
}
