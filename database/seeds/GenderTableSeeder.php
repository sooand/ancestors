<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('gender')->insert([
          'id' => 1,
          'description' => 'Male'
      ]);

      DB::table('gender')->insert([
          'id' => 2,
          'description' => 'Female'
      ]);
    }
}
