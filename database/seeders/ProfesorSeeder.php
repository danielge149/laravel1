<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codprofesor' => '01',
                'nomprofesor' => 'John Smith',
                'catprofesor' => 'Catedrático',
               
            ],
            [
                'codprofesor' => '02',
                'nomprofesor' => 'Alice Johnson',
                'catprofesor' => 'Investigador',
             
            ],
            [
                'codprofesor' => '03',
                'nomprofesor' => 'Michael Brown',
                'catprofesor' => 'Adjunto',
              
            ],
            [
                'codprofesor' => '04',
                'nomprofesor' => 'Jennifer Davis',
                'catprofesor' => 'Titular',
              
            ],
            [
                'codprofesor' => '05',
                'nomprofesor' => 'David Wilson',
                'catprofesor' => 'Asociado',
                
            ],
        ];

        DB::table('profesor')->insert($datos);
    }
}
