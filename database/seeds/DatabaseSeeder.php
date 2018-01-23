<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(relationTypeTableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TranslationTableSeeder::class);
        $this->call(OwnershipTableSeeder::class);
        $this->call(PersonRelationTableSeeder::class);
    }
}
