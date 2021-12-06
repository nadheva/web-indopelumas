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
            'foto' => 'nebula',
            'deskripsi' => 'nebula',
            'slug' => 'Nebula-Oil',
        ]);    
        Produk::create([
            'id' => '2',
            'produk' => 'Pertamina Oil',
            'foto' => 'Pertamina Oil',
            'deskripsi' => 'Pertamina Oil',
            'slug' => 'Pertamina-Oil',
        ]);    
        Produk::create([
            'id' => '3',
            'produk' => 'Shell Oil',
            'foto' => 'Shell Oil',
            'deskripsi' => 'Shell Oil',
            'slug' => 'Shell-Oil',
        ]);    
        Produk::create([
            'id' => '4',
            'produk' => 'Mobil Oil',
            'foto' => 'Mobil Oil',
            'deskripsi' => 'Mobil Oil',
            'slug' => 'Mobil-Oil',
        ]);    
        Produk::create([
            'id' => '5',
            'produk' => 'Eni Oil',
            'foto' => 'Eni Oil',
            'deskripsi' => 'Eni Oil',
            'slug' => 'Eni-Oil',
        ]);    
        Produk::create([
            'id' => '6',
            'produk' => 'Mobil Oil',
            'foto' => 'Mobil Oil',
            'deskripsi' => 'Mobil Oil',
            'slug' => 'Mobil-Oil',
        ]);
    }
}
