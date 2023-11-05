<?php

namespace Database\Seeders;

use App\Models\Tambah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TambahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tambah::factory()->make();
        collect([
            [
                'name' => 'Resti Dwi Saputri',
                'price' => '200'
            ],
            [
                'name' => 'Lailafni Nur Hidayanti',
                'price' => '300'
            ],
            [
                'name' => 'Joseph Markus Corputty',
                'price' => '500'
            ],
            [
                'name' => 'Benyamin Febrianto',
                'price' => '700'
            ],
            [
                'name' => 'Fransiskus Xaverius Kanembut',
                'price' => '900'
            ],
            [
                'name' => 'I Nyoman Rai',
                'price' => '900'
            ],
            ])-> each(function($tambah){
                \app\Models\Tambah::create([
                    'name' => $tambah['name'],
                    'price' => $tambah['price'],
                ]);

            });
    }
}
