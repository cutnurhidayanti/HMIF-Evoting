<?php

namespace Database\Seeders;

use App\Models\CalonKetua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalonKetuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
