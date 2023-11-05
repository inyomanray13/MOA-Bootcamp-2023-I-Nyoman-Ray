<?php

namespace Database\Seeders;

use App\Models\Edit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Edit::factory()->make();
        collect([
            [
                'name' => 'Resti Dwi Saputri',
                'date' => '21-01-2003',
                'skill' => 'Programmer',
                'experience' => 'Pernah Bekerja di Toko Pedia'
            ],
            [
                'name' => 'Lailafni Nur Hidayanti',
                'date' => '25-07-2002',
                'skill' => 'Ahli Gizi',
                'experience' => 'Pernah Bekerja di Rumah Sakit'
            ],
            [
                'name' => 'Joseph Markus Corputty',
                'date' => '24-12-2002',
                'skill' => 'Software Developer',
                'experience' => 'Pernah Bekerja di Google'
            ],
            [
                'name' => 'Benyamin Febrianto',
                'date' => '19-09-2001',
                'skill' => 'Teknisi',
                'experience' => 'Pernah Bekerja di Dealer Yamaha'
            ],
            [
                'name' => 'Fransiskus Xaverius Kanembut',
                'date' => '04-10-2002',
                'skill' => 'Human Management',
                'experience' => 'Pernah Bekerja di Pertamina'
            ],
            [
                'name' => 'I Nyoman Ray',
                'date' => '13-08-2003',
                'skill' => 'Application Development',
                'experience' => 'Pernah Bekerja di Apple'
            ],
            ])-> each(function($edit){
                \app\Models\Edit::create([
                    'name' => $edit['name'],
                    'date' => $edit['date'],
                    'skill' => $edit['skill'],
                    'experience' => $edit['experience'],
                ]);

            });
    }
}
