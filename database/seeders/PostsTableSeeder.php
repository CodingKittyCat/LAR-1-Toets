<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        $posts = new Post();
        $posts->user_id = 2;
        $posts->subject = "Cats";
        $posts->content = "A dog is man's best friend, but a cat is a person's best friend.";
        $posts->save();

        // 2
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Dogs";
        $posts->content = "Dogs are okay";
        $posts->save();

        // 3
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Otters";
        $posts->content = "Are you kidding me? They are adorable.";
        $posts->save();

        
        // 4
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Assassin's Creed";
        $posts->content = "My personal favourite will always be 3.";
        $posts->save();

        // 5
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Elden Ring";
        $posts->content = "All achievements woooo";
        $posts->save();

        // 6
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "OnePlus Nord 3";
        $posts->content = "The battery drain is a bit... fast";
        $posts->save();

        // 7
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Razer Mamba Elite";
        $posts->content = "It keeps disconnecting..?";
        $posts->save();

        // 8
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Razer Mamba Elite 2.0";
        $posts->content = "It's a pretty nice mouse, though";
        $posts->save();

        // 9
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Star Wars: The Old Republic";
        $posts->content = "Very good game.";
        $posts->save();

        // 10
        $posts = new Post();
        $posts->user_id = 1;
        $posts->subject = "Final Fantasy XIV Online";
        $posts->content = "My favourite MMO by far. I have 300+ hours on this and I haven't even reached the last expansion.";
        $posts->save();
    }
}
