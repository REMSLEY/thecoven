<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => rand(1,10),
            'user_id' => rand(1,10),
            'comment_body'=> str_random(100) //php artisan db:seed --Class=CommentsTableSeeder
            
    
]);}}
