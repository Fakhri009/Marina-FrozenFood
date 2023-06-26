<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;
use App\Models\kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Artikel::create([
            'judul' => 'Tahu Walik',
            'body' => 'Tahu Walik adalah makanan ygsadnowqndoqwkpd mqwpd qpw jqwdp ijqwpdiqwpdn qwdpqwndkwqdkpwqnd',
            'excerpt' => 'Tahu Walik wmqdkqmwdkwd...'
        ]);

        kategori::create([
            'id_kategori' => 'TW001',       //isian sementara, asal ada datanya ja
            'produk' => 'Tahu walik',
            'artikel' => 'oqkwdqo j dqoijqwdj dowijqw od qwdjqodjq'
        ]);
        
    }
}
