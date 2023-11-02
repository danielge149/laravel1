<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codmateria' => '01',
                'nommateria' => 'Matemáticas Avanzadas',
                'cremateria' => 4,
                
            ],
            [
                'codmateria' => '02',
                'nommateria' => 'Inglés Intermedio',
                'cremateria' => 3,
                
            ],
            [
                'codmateria' => '03',
                'nommateria' => 'Programación Orientada a Objetos',
                'cremateria' => 5,
                
            ],
            [
                'codmateria' => '04',
                'nommateria' => 'Anatomía Humana',
                'cremateria' => 4,
                
            ],
            [
                'codmateria' => '05',
                'nommateria' => 'Historia del Derecho',
                'cremateria' => 3,
                
            ],
        ];

        DB::table('materia')->insert($datos);
    }
    
}
