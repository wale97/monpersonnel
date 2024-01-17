<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'Ayato',
            'surname'=>'Anatole',
            'email'=>'ayatole@gmail.com',
            'usertype'=>'worker',
            'password'=>Hash::make('password')
        ]);

    }
}
