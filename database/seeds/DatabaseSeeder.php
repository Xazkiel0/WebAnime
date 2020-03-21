<?php

use App\Article;
use App\Category;
use App\Genre;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create('id_ID');

        for ($i = 0; $i < 3; $i++) {
            Article::create([
                'name' => $fake->firstName,
                'Content' => $fake->text(500)
            ]);
        }
        for ($j = 0; $j < 6; $j++) {
            Category::create([
                'name' => $fake->randomElement(['Anime', 'Technology', 'Game', 'Film']),
                'article_id' => $fake->numberBetween(1, 6)
            ]);
        }
        for ($i = 0; $i < 6; $i++) {
            Genre::create([
                'article_id' => $fake->numberBetween(1, 6),
                'name' => $fake->randomElement(['Horror', 'Action', 'Fantasy', 'Adventure', 'Romance', 'Harem'])
            ]);
        }
    }
}
