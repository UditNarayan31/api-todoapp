<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('udit123')

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
