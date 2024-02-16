<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i < 5; $i++){

        
        $faker = Faker::create();
        
            $post = new Post();
            $post->titulo = $faker->firstName;
            $post->contenido = $faker->text;
            $post->usuario_id = $faker->numberBetween(1,4);
            
            $post->save();
            }
    }
}
