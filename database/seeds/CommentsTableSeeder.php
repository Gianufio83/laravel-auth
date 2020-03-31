<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        $posts= Post::all();
        foreach($posts as $post) {
            for ($i = 0; $i < 10; $i++) {

                $newComment = new Comment();
                $newComment->name = $faker->name;
                $newComment->email = $faker->email;
                $newComment->title = $faker->sentence(3);
                $newComment->body = $faker->text(150);
                $newComment->post_id = $post->id;
                $newComment->save();   
        }

        
        }
    }
}
