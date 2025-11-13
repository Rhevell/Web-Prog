<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Writer;
use App\Models\Category;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $Faker = Faker::create('id_ID');
        $Writer =  Writer::pluck('id')->toArray();
        $Category =  Category::pluck('id')->toArray();
        for ($i=1; $i < 50 ; $i++) {
            Article::create([
                'title' => $Faker->sentence(5),
                'content' => $Faker->paragraphs(3, true),
                'date' => $Faker->date(),
                'category_id' => $Faker->randomElement($Category),
                'writer_id' => $Faker->randomElement($Writer)
            ]);
        }

    }
}
