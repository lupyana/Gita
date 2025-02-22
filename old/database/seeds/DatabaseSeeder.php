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
        // $this->call(UsersTableSeeder::class);
        $this->call(ChordsTableSeeder::class);
          $this->call(ChordTypesTableSeeder::class);
        $this->call(artistTableSeeder::class);

    }
}
