<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeed::class);
        $this->call(CoursesTableSeed::class);
        $this->call(UsersSeed::class);
    }
}
