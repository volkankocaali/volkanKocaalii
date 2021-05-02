<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Schema::disableForeignKeyConstraints();
        DB::table('providers')->truncate();
        DB::table('developers')->truncate();

        Schema::enableForeignKeyConstraints();

        $this->call(ProviderTableSeeder::class);
        $this->call(DevoloperTableSeeder::class);
        //$this->call(NoteTableSeeder::class);
    }
}
