<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => "hamza sulehri",
                'email' => 'mhamzasulehri143@gmail.com',
                'password' => Hash::make('12345'),
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ],
            [
                'name' => "adnan abid",
                'email' => 'adnan@test.com',
                'password' => Hash::make('ad124'),
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ]
            
        ]);

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@test.com',
        //     'password' => Hash::make('12345')
        // ]);
    }
}
