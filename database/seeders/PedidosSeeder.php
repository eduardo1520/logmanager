<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedidos')->insert([
            ['id' => 1, 'vendedor_id' => 1, 'produto' => 'etiqueta02', 'quantidade' => '200','valor_total' => 2000],
            ['id' => 2, 'vendedor_id' => 2, 'produto' => 'etiqueta01', 'quantidade' => '250','valor_total' => 2500],
            ['id' => 3, 'vendedor_id' => 3, 'produto' => 'etiqueta03', 'quantidade' => '300','valor_total' => 3000],
        ]);
    }
}
