<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Anas Naufal Al-Kiram',
            'nim' => '2008107010065',
            'password' => bcrypt('12345'),
            'confirm_password' => bcrypt('12345'),
            'email' => 'anas@gmail.com',
            'Status' => False,

        ]);
    }
}
