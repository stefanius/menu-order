<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Menu::class, 50)->create();
    }

    protected function addUser()
    {
        factory(\App\Models\User::class)->create([
            'name' => 'Noud X',
            'email' => 'noud@oostpolder-online.nl',
            'password' => 'Welkom01!',
        ]);
    }
}
