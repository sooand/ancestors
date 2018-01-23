<?php

use Illuminate\Database\Seeder;

class PersonRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('personRelation')->insert([
          'id' => 1,
          'relationType_refType' => 'Brother',
          'from_person_id' => 1,
          'to_person_id' => 4,
          'valid_from' => '1993-12-08 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 2,
          'relationType_refType' => 'Sister',
          'from_person_id' => 1,
          'to_person_id' => 5,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 3,
          'relationType_refType' => 'Father',
          'from_person_id' => 1,
          'to_person_id' => 2,
          'valid_from' => '1993-12-08 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 4,
          'relationType_refType' => 'Mother',
          'from_person_id' => 1,
          'to_person_id' => 3,
          'valid_from' => '1993-12-08 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 5,
          'relationType_refType' => 'Wife',
          'from_person_id' => 2,
          'to_person_id' => 3,
          'valid_from' => '1989-04-29 11:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 6,
          'relationType_refType' => 'Son',
          'from_person_id' => 2,
          'to_person_id' => 4,
          'valid_from' => '1992-02-17 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 7,
          'relationType_refType' => 'Son',
          'from_person_id' => 2,
          'to_person_id' => 1,
          'valid_from' => '1993-12-08 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 8,
          'relationType_refType' => 'Daughter',
          'from_person_id' => 2,
          'to_person_id' => 5,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 9,
          'relationType_refType' => 'Husband',
          'from_person_id' => 3,
          'to_person_id' => 2,
          'valid_from' => '1989-04-29 11:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 10,
          'relationType_refType' => 'Son',
          'from_person_id' => 3,
          'to_person_id' => 4,
          'valid_from' => '1992-02-17 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 11,
          'relationType_refType' => 'Son',
          'from_person_id' => 3,
          'to_person_id' => 1,
          'valid_from' => '1993-12-08 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 12,
          'relationType_refType' => 'Daughter',
          'from_person_id' => 3,
          'to_person_id' => 5,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 13,
          'relationType_refType' => 'Brother',
          'from_person_id' => 4,
          'to_person_id' => 1,
          'valid_from' => '1993-12-08 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 14,
          'relationType_refType' => 'Sister',
          'from_person_id' => 4,
          'to_person_id' => 5,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 15,
          'relationType_refType' => 'Father',
          'from_person_id' => 4,
          'to_person_id' => 2,
          'valid_from' => '1992-02-17 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 16,
          'relationType_refType' => 'Mother',
          'from_person_id' => 4,
          'to_person_id' => 3,
          'valid_from' => '1992-02-17 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 17,
          'relationType_refType' => 'Brother',
          'from_person_id' => 5,
          'to_person_id' => 4,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 18,
          'relationType_refType' => 'Brother',
          'from_person_id' => 5,
          'to_person_id' => 1,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 19,
          'relationType_refType' => 'Mother',
          'from_person_id' => 5,
          'to_person_id' => 3,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);

      DB::table('personRelation')->insert([
          'id' => 20,
          'relationType_refType' => 'Father',
          'from_person_id' => 5,
          'to_person_id' => 2,
          'valid_from' => '2001-09-13 00:00:00',
          'valid_to' => null,
      ]);
    }
}
