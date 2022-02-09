<?php

namespace Database\Seeders;

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
        // TODO dri pada pengulangan $this secara berulang, lakukan 1x $this dengan menjadikan array
        // $this->call(UsersSeeder::class);
        // $this->call(TasksSeeder::class);
        $this->call([TasksSeeder::class, UsersSeeder::class]);
    }
}
