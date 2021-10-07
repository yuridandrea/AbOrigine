<?php


use App\Tag;
use Illuminate\Database\Seeder;

class DescriptionInTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();
        foreach ($tags as $tag) {
			$tag['description'] = $faker->paragraphs($faker->numberBetween(2,5), true);
			$tag->update();
		}
    }
}
