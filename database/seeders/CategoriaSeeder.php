<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nome' => 'Cafés', 'icono' => 'icono_cafe.svg', 'created_at' => now()],
            ['nome' => 'Pizzas', 'icono' => 'icono_pizza.svg', 'created_at' => now()],
            ['nome' => 'Doces', 'icono' => 'icono_bolo.svg', 'created_at' => now()],
            ['nome' => 'Salgados', 'icono' => 'icono_pastel.svg', 'created_at' => now()],
            ['nome' => 'Smoothies', 'icono' => 'icono_biscoito.svg', 'created_at' => now()],
            ['nome' => 'Sanduíches', 'icono' => 'icono_hamburguer.svg', 'created_at' => now()]
        ];
        
        //DB::table('categorias')->insert($categorias);
    }
}


