<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'   => 'Tiago Ezidio',
            'email'   => 'admin@admin.com',
            'password'   => bcrypt('senha123'),
        ]);


        // $faker = \Faker\Factory::create('pt_BR');
        // for ($i = 0; $i < 50; $i++) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => Hash::make('password'),
        //     ]);
        // }



    }
}
