<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            
                'nombre' => "Nuevo"
            ],
            [
                
                'nombre' => "Como nuevo"
            ],
            [
            
                'nombre' => "Buen estado"
            ],
            [
            
                'nombre' => "Regular"
            ],
            [
            
                'nombre' => "Necesita reparación"
            ]
        ];
        DB::table('estados')->insert($data);
    }
}
