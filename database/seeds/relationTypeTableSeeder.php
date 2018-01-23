<?php

use Illuminate\Database\Seeder;

class relationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('relationType')->insert([
          'id' => 1,
          'refType' => 'Brother',
          'description' => 'Brother'
      ]);

      DB::table('relationType')->insert([
          'id' => 2,
          'refType' => 'Sister',
          'description' => 'Sister'
      ]);

      DB::table('relationType')->insert([
          'id' => 3,
          'refType' => 'Mother',
          'description' => 'Mother'
      ]);

      DB::table('relationType')->insert([
          'id' => 4,
          'refType' => 'Father',
          'description' => 'Father'
      ]);

      DB::table('relationType')->insert([
          'id' => 5,
          'refType' => 'Wife',
          'description' => 'Wife'
      ]);

      DB::table('relationType')->insert([
          'id' => 6,
          'refType' => 'Husband',
          'description' => 'Husband'
      ]);

      DB::table('relationType')->insert([
          'id' => 7,
          'refType' => 'Boyfriend',
          'description' => 'Boyfriend'
      ]);

      DB::table('relationType')->insert([
          'id' => 8,
          'refType' => 'Girlfriend',
          'description' => 'Girlfriend'
      ]);

      DB::table('relationType')->insert([
          'id' => 9,
          'refType' => 'Son',
          'description' => 'Son'
      ]);

      DB::table('relationType')->insert([
          'id' => 10,
          'refType' => 'Daughter',
          'description' => 'Daughter'
      ]);
    }
}
