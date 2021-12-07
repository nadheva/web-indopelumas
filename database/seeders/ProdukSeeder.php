<?php

namespace Database\Seeders;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'id' => '1',
            'produk' => 'Nebula Oil',
            'foto' => 'nebula.png',
            'deskripsi' => 'nebula',
            'slug' => 'Nebula-Oil',
        ]);    
        Produk::create([
            'id' => '2',
            'produk' => 'Pertamina Oil',
            'foto' => 'pertamina.png',
            'deskripsi' => 'Pertamina Oil',
            'slug' => 'Pertamina-Oil',
        ]);    
        Produk::create([
            'id' => '3',
            'produk' => 'Shell Oil',
            'foto' => 'shell.png',
            'deskripsi' => 'Shell Oil',
            'slug' => 'Shell-Oil',
        ]);    
        Produk::create([
            'id' => '4',
            'produk' => 'Mobil Oil',
            'foto' => 'mobil.png',
            'deskripsi' => 'Mobil Oil',
            'slug' => 'Mobil-Oil',
        ]);    
        Produk::create([
            'id' => '5',
            'produk' => 'Eni Oil',
            'foto' => 'eni.png',
            'deskripsi' => 'Eni Oil',
            'slug' => 'Eni-Oil',
        ]);    
        Produk::create([
            'id' => '6',
            'produk' => 'Total Oil',
            'foto' => 'total.png',
            'deskripsi' => 'Total Oil',
            'slug' => 'Total-Oil',
        ]);
    }
}
