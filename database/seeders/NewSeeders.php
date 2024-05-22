<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\News;

class NewSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'user_id' => 1,
            'jenis_wisata' => 'pantai',
            'title' => 'wisata pantai abuse',
            'tag' => 'beautifull',
            'short_deskripsi' => 'short deskripsi',
            'long_deskripsi' => 'long_deskripsi',
            'location' => 'lo sari',
            'harga' => 400000,
            'ranting' => '3.4',
            'url_images' => 'C://foto.jpg'
        ]);
    }
}
