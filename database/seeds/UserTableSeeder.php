<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Søren Frisk',
            'email' => 'soeren.frisk@gmail.com',
            'password' => bcrypt('123456'),
            'language_code' => 'dk',
            'person_id' => 1,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Tom Frisk',
            'email' => 'tf@mpsg.net',
            'password' => bcrypt('Apollovej10'),
            'language_code' => 'dk',
            'person_id' => 2,
        ]);
    }
}
