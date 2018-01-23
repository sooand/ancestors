<?php

use Illuminate\Database\Seeder;

class OwnershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ownership')->insert([
          'id' => 1,
          'tableRef' => 'person',
          'idRef' => 1,
          'primaryOwner' => 1,
          'user_id' => 1,
      ]);

      DB::table('ownership')->insert([
          'id' => 2,
          'tableRef' => 'person',
          'idRef' => 2,
          'primaryOwner' => 1,
          'user_id' => 2,
      ]);

      DB::table('ownership')->insert([
          'id' => 3,
          'tableRef' => 'person',
          'idRef' => 3,
          'primaryOwner' => 1,
          'user_id' => 1,
      ]);

      DB::table('ownership')->insert([
          'id' => 4,
          'tableRef' => 'person',
          'idRef' => 4,
          'primaryOwner' => 1,
          'user_id' => 1,
      ]);

      DB::table('ownership')->insert([
          'id' => 5,
          'tableRef' => 'person',
          'idRef' => 5,
          'primaryOwner' => 1,
          'user_id' => 1,
      ]);

      DB::table('ownership')->insert([
          'id' => 6,
          'tableRef' => 'person',
          'idRef' => 2,
          'primaryOwner' => 0,
          'user_id' => 1,
      ]);
    }
}
