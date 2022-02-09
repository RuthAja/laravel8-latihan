<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        // $user  = collect([
        //     [
        //         'name' => 'Ruth Aja',
        //         'email' => 'ruthajalah1@gmail.com',
        //         'email_verified_at' => now(),
        //         // 'password' => Hash::make('password'),
        //         'password' => bcrypt('password'),
        //     ],
        //     [
        //         'name' => 'Ion Aja',
        //         'email' => 'ionaja00@gmail.com',
        //         'email_verified_at' => now(),
        //         // 'password' => Hash::make('password'),
        //         'password' => bcrypt('password'),
        //     ]
        // ])->each(function ($user) {
        //     User::create($user);
        // });
        // User::factory(10)->create();
    }
}
