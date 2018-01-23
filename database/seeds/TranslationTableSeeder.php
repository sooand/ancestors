<?php

use Illuminate\Database\Seeder;

class TranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('translation')->insert([
          'id' => 1,
          'tableRef' => 'gender',
          'idRef' => 1,
          'language_code' => 'dk',
          'description' => 'Mand'
      ]);

      DB::table('translation')->insert([
          'id' => 2,
          'tableRef' => 'gender',
          'idRef' => 2,
          'language_code' => 'dk',
          'description' => 'Kvinde'
      ]);

      DB::table('translation')->insert([
          'id' => 3,
          'tableRef' => 'gender',
          'idRef' => 1,
          'language_code' => 'engb',
          'description' => 'Male'
      ]);

      DB::table('translation')->insert([
          'id' => 4,
          'tableRef' => 'gender',
          'idRef' => 2,
          'language_code' => 'engb',
          'description' => 'Female'
      ]);

    }
}
