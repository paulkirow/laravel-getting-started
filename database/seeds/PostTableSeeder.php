<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Seeder Post 1',
            'content' => 'This is the description'
        ]);
        $post->save();
        $post = new \App\Post([
            'title' => 'Seeder Post 2',
            'content' => 'This is the description'
        ]);
        $post->save();
    }
}
