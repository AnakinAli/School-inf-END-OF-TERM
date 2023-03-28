<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name' => 'Anakin Ali',
                'email' => 'anakin48@abv.bg',
                'password' => Hash::make('88888888'),
                'isAdmin' => true
            ],
            [
                'name' => 'Galina Dimitrova',
                'email' => 'example@abv.bg',
                'password' => Hash::make('88888888'),
                'isAdmin' => true
            ],
            [
                'name' => 'Todor Stoykov',
                'email' => 'example1@abv.bg',
                'password' => Hash::make('88888888'),
                'isAdmin' => true
            ]
        ];
        foreach ($users as $user){
            User::create(
                $user
            );
        }
    }
}
