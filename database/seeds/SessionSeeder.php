<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            'session' => Str::random(4).'-'.Str::random(4),
        ]);
    }
}
