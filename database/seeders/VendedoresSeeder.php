<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendedores')->insert([
            ['id' => 1, 'nome' => 'Ana Silva', 'email' => 'ana@exemplo.com', 'telefone' => '9999-1111'],
            ['id' => 2, 'nome' => 'Bruno Costa', 'email' => 'bruno@exemplo.com', 'telefone' => '9999-2222'],
            ['id' => 3, 'nome' => 'Carlos Lima', 'email' => 'carlos@exemplo.com', 'telefone' => '9999-3333'],
        ]);
    }
}
