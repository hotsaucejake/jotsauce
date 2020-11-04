<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => config('jotsauce.seed_username'),
            'email' => config('jotsauce.seed_email'),
            'email_verified_at' => now(),
            'password' => bcrypt(config('jotsauce.seed_password')),
        ]);
    }
}
