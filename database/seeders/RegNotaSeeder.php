<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegNotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'estudiante' => '01',
                'materia' => '01',
                'profesor' => '01',
                'parcial1' => 4.5,
                'parcial2' => 3.0,
                'efinal' => 4.5,
                'nfinal' => 5.0,
                'estado' => 'A',
                
            ],
            [
                'estudiante' => '02',
                'materia' => '02',
                'profesor' => '02',
                'parcial1' => 3.0,
                'parcial2' => 5.5,
                'efinal' => 2.0,
                'nfinal' => 1.0,
                'estado' => 'A',
                
            ],
            [
                'estudiante' => '03',
                'materia' => '03',
                'profesor' => '03',
                'parcial1' => 2.0,
                'parcial2' => 3.5,
                'efinal' => 4.0,
                'nfinal' => 1.0,
                'estado' => 'A',
                
            ],
            [
                'estudiante' => '04',
                'materia' => '04',
                'profesor' => '04',
                'parcial1' => 3.5,
                'parcial2' => 4.0,
                'efinal' => 3.0,
                'nfinal' => 5.0,
                'estado' => 'A',
                
            ],
            [
                'estudiante' => '05',
                'materia' => '05',
                'profesor' => '05',
                'parcial1' => 5.0,
                'parcial2' => 1.5,
                'efinal' => 3.0,
                'nfinal' => 4.0,
                'estado' => 'A',
                
            ],
        ];

        DB::table('regnota')->insert($datos);
    }
}
