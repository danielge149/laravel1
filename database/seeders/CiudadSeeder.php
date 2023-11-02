<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codciudad' =>'1',
                'nomciudad' =>'pasto',
                'departamento' =>'02',
            ],
            [
                'codciudad' =>'2',
                'nomciudad' =>'Cali',
                'departamento' =>'03',
            ],
            [
                'codciudad' => '3',
                'nomciudad' => 'Ipiales',
                'departamento' =>'02',
            ],
            [
                'codciudad' => '4',
                'nomciudad' => 'Barranquilla',
                'departamento' =>'01',
            ],
            [
                'codciudad' => '5',
                'nomciudad' => 'Cauca',
                'departamento' =>'03',
            ]
        ];
        DB::table('ciudad')->insert($datos);
    }
}
