<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codestudiante' => '01',
                'nomestudiante' => 'Ana Pérez',
                'edadestudiante' => 22,
                'fechaestudiante' => '2000-03-10',
                'sexestudiante' => 'F',
                'ciudad' => '1', // Código de la ciudad
                'barrio' => '1', // Código del barrio
                'programa' => '1', // Código del programa
            ],
            [
                'codestudiante' => '02',
                'nomestudiante' => 'Carlos López',
                'edadestudiante' => 21,
                'fechaestudiante' => '2001-05-15',
                'sexestudiante' => 'M',
                'ciudad' => '2', // Código de la ciudad
                'barrio' => '2', // Código del barrio
                'programa' => '2', // Código del programa
            ],
            [
                'codestudiante' => '03',
                'nomestudiante' => 'Elena Ramírez',
                'edadestudiante' => 23,
                'fechaestudiante' => '1999-11-20',
                'sexestudiante' => 'F',
                'ciudad' => '3', // Código de la ciudad
                'barrio' => '3', // Código del barrio
                'programa' => '3', // Código del programa
            ],
            [
                'codestudiante' => '04',
                'nomestudiante' => 'Javier Martínez',
                'edadestudiante' => 20,
                'fechaestudiante' => '2002-02-28',
                'sexestudiante' => 'M',
                'ciudad' => '4', // Código de la ciudad
                'barrio' => '4', // Código del barrio
                'programa' => '4', // Código del programa
            ],
            [
                'codestudiante' => '05',
                'nomestudiante' => 'Laura Gómez',
                'edadestudiante' => 24,
                'fechaestudiante' => '1998-08-12',
                'sexestudiante' => 'F',
                'ciudad' => '5', // Código de la ciudad
                'barrio' => '5', // Código del barrio
                'programa' => '5', // Código del programa
            ],
        ];

        DB::table('estudiante')->insert($datos);
    }
}
