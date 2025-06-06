<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetasEntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etiquetas_entrega')->insert([
            ['id' => 1, 'vendedor_id' => 3, 'transportadora_id' => 1,'pedido_id' => 1, 'data_envio' => '2025-04-06'],
            ['id' => 2, 'vendedor_id' => 2, 'transportadora_id' => 3,'pedido_id' => 2, 'data_envio' => '2025-05-10'],
            ['id' => 3, 'vendedor_id' => 1, 'transportadora_id' => 2,'pedido_id' => 3, 'data_envio' => '2025-06-01'],
        ]);
    }
}
