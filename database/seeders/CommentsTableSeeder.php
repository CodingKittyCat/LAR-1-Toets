<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Posts 1, 2 and 3 have no comments

        // 1 - Post 4
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 4;
        $comments->content = "I like Black Flag (IV) more.";
        $comments->save();

        // 2 - Post 4
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 4;
        $comments->content = "Gonna have to be Syndicate for me.";
        $comments->save();

        // 3 - Post 4
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 4;
        $comments->content = "One will always be my eternal love.";
        $comments->save();

        // 4 - Post 4
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 4;
        $comments->content = "Brotherhood is where it's at!";
        $comments->save();

        // Post 5 has 0 comments

        // Post 6 has 0 comments

        // 1 - Post 7
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 7;
        $comments->content = "I haven't stumbled upon this issue at all.";
        $comments->save();

        // 2 - Post 7
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 7;
        $comments->content = "Same here!";
        $comments->save();

        // 3 - Post 7
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 7;
        $comments->content = "Does anyone know a fix for this?";
        $comments->save();

        // 1 - Post 8
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 8;
        $comments->content = "It's indeed a very nice most.";
        $comments->save();

        // 2 - Post 8
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 8;
        $comments->content = "It's kinda lackluster as an mmo player for me.";
        $comments->save();
        

        // Post 9 has no comments

        // 1 - Post 10
        $comments = new Comment();
        $comments->user_id = 2;
        $comments->post_id = 10;
        $comments->content = "I most definitely agree!";
        $comments->save();

    }
}
