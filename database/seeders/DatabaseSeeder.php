<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Produk;
use App\Models\Category;
use App\Models\Artikel;
use App\Models\kategori;
use App\Models\Promo;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        User::create([
                'name' => 'Fakhri Agusriadi',
                'email' => 'fakhriagusriadi@gmail.com',
                'password' => bcrypt ('12345678'),
        ]);

        User::create([
                'name' => 'Muhammad Ramadana',
                'email' => 'ramadana@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);

        User::create([
                'name' => 'Ahmad Muhaimin Nurhawari',
                'email' => 'muhaimin@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Muhammad Teo Saputra',
                'email' => 'teo@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Ariya Hadi Praseno',
                'email' => 'ariya@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Ahmad Hibbi',
                'email' => 'hibbi@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Muhammad Zahid Ramadan',
                'email' => 'zahid@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Muhammad Syifa',
                'email' => 'syifa@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Fitriah',
                'email' => 'fitriah@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Annisa Khumaira',
                'email' => 'annisa@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'layli ihya khaitami',
                'email' => 'layli@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);
        User::create([
                'name' => 'Shafira Rahmawati',
                'email' => 'ira@gmail.com',
                'password' => bcrypt ('12345678'),
         ]);



        Produk::create([
                'id_produk' => 'A01',
                'nama_produk' => 'Tahu Walik',
                'harga' => 'Rp 10.000',
                'stok' => '100',
         ]);
        Produk::create([
                'id_produk' => 'B01',
                'nama_produk' => 'Es Jelly',
                'harga' => 'Rp 8.000',
                'stok' => '100',
         ]);



        Kategori::create([
                'id_kategori' => 'A01',
                'nama_kategori' => 'Mercon',
         ]);
        Kategori::create([
                'id_kategori' => 'A02',
                'nama_kategori' => 'Original',
         ]);
        Kategori::create([
                'id_kategori' => 'B01',
                'nama_kategori' => 'Coklat',
         ]);
        Kategori::create([
                'id_kategori' => 'B02',
                'nama_kategori' => 'Vanilla',
         ]);




        Artikel::create([
                'judul' => 'Tahu Walik',
                'body' => 'Lorem ipsum dolor sit amet.',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, illo laborum consequuntur veniam itaque mollitia quam incidunt ab inventore animi sequi ex id maxime dolores aut deserunt optio vero quaerat?',
         ]);
        Artikel::create([
                'judul' => 'Susu Jelly',
                'body' => 'Lorem ipsum dolor sit amet.',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, illo laborum consequuntur veniam itaque mollitia quam incidunt ab inventore animi sequi ex id maxime dolores aut deserunt optio vero quaerat?',
         ]);



         Promo::create([
            'id_promo' => 'A01',
            'nama_promo' => 'Tahu Walik',
            'harga' => 'Rp 8.000',
            'stok' => '10',
     ]);
         Promo::create([
            'id_promo' => 'B02',
            'nama_promo' => 'Es Jelly',
            'harga' => 'Rp 6.000',
            'stok' => '10',
     ]);




    }
}
