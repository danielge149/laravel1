<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'coddepto' =>'01',
                'nomdepto' =>'Bolivar',
            ],
            [
                'coddepto' =>'02',
                'nomdepto' =>'Nariño',
            ],
            [
                'coddepto' => '03',
                'nomdepto' => 'Valle',
            ],
            [
                'coddepto' => '04',
                'nomdepto' => 'Meta',
            ],
            [
                'coddepto' => '05',
                'nomdepto' => 'Antioquia',
            ]
        ];
        DB::table('departamento')->insert($datos);
    }
}
