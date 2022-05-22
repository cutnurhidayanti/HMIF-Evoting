<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CalonKetua;

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

        CalonKetua::create([
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png',
            'nama' => 'Anas Naufal Al-Kiram',
            'nim' => '2008107010065',
            'visi' => 'babayy pilox',
            'misi' => 'di catt',
        ]);


        CalonKetua::create([
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png',
            'nama' => 'Angkasah',
            'nim' => '2008107010017',
            'visi' => 'babayy pilox',
            'misi' => 'di catt',
        ]);
    }
}
