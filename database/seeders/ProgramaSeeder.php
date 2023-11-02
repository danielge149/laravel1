<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codprograma' =>'1',
                'nomprograma' =>'Matematicas',
                'facultad' =>'10',
            ],
            [
                'codprograma' =>'2',
                'nomprograma' =>'Ingles',
                'facultad' =>'20',
            ],
            [
                'codprograma' => '3',
                'nomprograma' => 'Programacion',
                'facultad' =>'30',
            ],
            [
                'codprograma' => '4',
                'nomprograma' => 'Enfermeria',
                'facultad' =>'40',
            ],
            [
                'codprograma' => '5',
                'nomprograma' => 'Derecho',
                'facultad' =>'50',
            ]
        ];
        DB::table('programa')->insert($datos);
    }
}
