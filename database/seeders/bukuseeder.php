<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'pengarang' => 'George Orwell',
                'judul' => 'juragan tahu',
                'tahun_terbit' => 1949,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pengarang' => 'Harper Lee',
                'judul' => 'To Kill a Mockingbird',
                'tahun_terbit' => 1960,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pengarang' => 'gugugaga',
                'judul' => 'The Hobbit',
                'tahun_terbit' => 1937,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('buku')->insert($buku);
    }
}
