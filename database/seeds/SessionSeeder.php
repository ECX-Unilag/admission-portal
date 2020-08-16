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
        $session = factory(App\Session::class, 1)->create();
    }
}
