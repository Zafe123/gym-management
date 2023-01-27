<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::table('members')->insert([
            'name' => 'Zafe Joshua',
            'email' => 'Joshua123@yahoo.com',
            'membership_expiration' => 'December 33, 2023',
        ]);


    }
}