<?php

use Illuminate\Database\Seeder;
use App\User;
// use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Sola',
            'email' => 'adv@mail.com',
            'password' =>bcrypt('Sola'),
        ]
        );
    }
}
