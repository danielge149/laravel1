<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codfacultad' =>'10',
                'nomfacultad' =>'Ciencias exactas',
            ],
            [
                'codfacultad' =>'20',
                'nomfacultad' =>'Idiomas',
            ],
            [
                'codfacultad' => '30',
                'nomfacultad' => 'Programacion',
            ],
            [
                'codfacultad' => '40',
                'nomfacultad' => 'Fisica',
            ],
            [
                'codfacultad' => '50',
                'nomfacultad' => 'Economia',
            ]
        ];
        DB::table('facultad')->insert($datos);
    }
}
