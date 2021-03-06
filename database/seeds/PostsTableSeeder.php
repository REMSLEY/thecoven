<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => rand(1,10),
            'title' => str_random(30),
            'body'=> str_random(300),
            'slug' => str_random(40),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            'end_date'=> new DateTime(),
            'update_id'=>rand(1,10),    
        ]);
    }
}
