<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'address_book_id' => 0,
            'user' => 'admin',
            'admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('d01m02'), // password
            'remember_token' => Str::random(10),

        ]);
    }
}
