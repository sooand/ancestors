<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('person')->insert([
          'id' => 1,
          'firstName' => 'Søren',
          'middleName' => 'Risbøll',
          'familyName' => 'Frisk',
          'bornFamilyName' => 'Frisk',
          'birthDateTime' => '1993-08-12 00:00:00',
          'deathDateTime' => null,
          'gender_id' => 1
      ]);

      DB::table('person')->insert([
          'id' => 2,
          'firstName' => 'Tom',
          'middleName' => null,
          'familyName' => 'Frisk',
          'bornFamilyName' => 'Frisk',
          'birthDateTime' => '1962-11-11 00:00:00',
          'deathDateTime' => null,
          'gender_id' => 1
      ]);

      DB::table('person')->insert([
          'id' => 3,
          'firstName' => 'Inge',
          'middleName' => 'Risbøll',
          'familyName' => 'Ljunggreen',
          'bornFamilyName' => 'Ljunggreen',
          'birthDateTime' => '1965-05-29 00:00:00',
          'deathDateTime' => null,
          'gender_id' => 2
      ]);

      DB::table('person')->insert([
          'id' => 4,
          'firstName' => 'Claus',
          'middleName' => 'Risbøll',
          'familyName' => 'Frisk',
          'bornFamilyName' => 'Frisk',
          'birthDateTime' => '1992-02-17 00:00:00',
          'deathDateTime' => null,
          'gender_id' => 1
      ]);

      DB::table('person')->insert([
          'id' => 5,
          'firstName' => 'Line',
          'middleName' => 'Risbøll',
          'familyName' => 'Frisk',
          'bornFamilyName' => 'Frisk',
          'birthDateTime' => '2001-09-13 00:00:00',
          'deathDateTime' => null,
          'gender_id' => 2
      ]);
    }
}
