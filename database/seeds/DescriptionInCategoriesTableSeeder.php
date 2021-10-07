<?php


use App\Category;
use Illuminate\Database\Seeder;

class DescriptionInCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
			$category['description'] = $faker->paragraphs($faker->numberBetween(2,5), true);
			$category->update();
		}
    }
}
