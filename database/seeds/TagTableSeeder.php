<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Tag();
        $tag->name = 'Tag Seeder 1';
        $tag->save();
        $tag = new \App\Tag();
        $tag->name = 'Tag Seeder 2';
        $tag->save();
    }
}
