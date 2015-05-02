<?php
use \Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        User::create([
            'email' => 'dev@ekoolab.com',
            'password' => Hash::make('ekoolab')
        ]);
    }
}