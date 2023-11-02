<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codbarrio' =>'1',
                'nombarrio' =>'Margare',
                'estbarrio' =>'02',
                'comuna' =>'13',
            ],
            [
                'codbarrio' =>'2',
                'nombarrio' =>'Charco',
                'estbarrio' =>'03',
                'comuna' =>'11',
            ],
            [
                'codbarrio' =>'3',
                'nombarrio' =>'Rosal',
                'estbarrio' =>'01',
                'comuna' =>'27',
            ],
            [
                'codbarrio' =>'4',
                'nombarrio' =>'Pandiaco',
                'estbarrio' =>'02',
                'comuna' =>'4',
            ],
            [
                'codbarrio' =>'5',
                'nombarrio' =>'Golgota',
                'estbarrio' =>'01',
                'comuna' =>'14',
            ]
        ];
        DB::table('barrio')->insert($datos);
    }
}
