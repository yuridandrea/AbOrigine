<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryIdInPostsTablesSeeder::class);
        $this->call(DescriptionInCategoriesTableSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(UserIdInPostsTableSeeder::class);

    }
}

