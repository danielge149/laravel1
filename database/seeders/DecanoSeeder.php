<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DecanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'coddecano' =>'11',
                'nomdecano' =>'Luis',
                'facultad' =>'10',
            ],
            [
                'coddecano' =>'22',
                'nomdecano' =>'Felipe',
                'facultad' =>'20',
            ],
            [
                'coddecano' => '33',
                'nomdecano' => 'Maria',
                'facultad' =>'30',
            ],
            [
                'codecano' => '44',
                'nomdecano' => 'Fernanda',
                'facultad' =>'40',
            ],
            [
                'coddecano' => '55',
                'nomdecano' => 'Marcos',
                'facultad' =>'50',
            ]
        ];
        DB::table('decano')->insert($datos);
    }
}
