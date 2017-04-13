<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(50),
            'email'=> str_random(30).'@gmail.com',
            'password'=> bcrypt('secret'),
            'access_level'=>str_random(30),
            'remember_token'=> str_random(100),
            'avatar'=> str_random(50),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            'end_date'=> new DateTime(),
            'update_id'=>rand(1,10),
            
            
    ]);}
}
