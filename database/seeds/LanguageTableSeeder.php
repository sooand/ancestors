<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('language')->insert([
          'id' => 1,
          'code' => 'dk',
          'name' => 'Dansk',
      ]);

      DB::table('language')->insert([
          'id' => 2,
          'code' => 'enus',
          'name' => 'American',
      ]);

      DB::table('language')->insert([
          'id' => 3,
          'code' => 'engb',
          'name' => 'English',
      ]);
    }
}
