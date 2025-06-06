<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportadorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transportadoras')->insert([
            ['id' => 1, 'nome' => 'TransLog', 'endereco' => 'Rua A, 100', 'email' => 'translog@gmail.com.br', 'telefone' => '1234-5678'],
            ['id' => 2, 'nome' => 'Rápido Express', 'endereco' => 'Avenida B, 200', 'email' => 'rapidoexpressg@gmail.com.br', 'telefone' => '8765-4321'],
            ['id' => 3, 'nome' => 'FastShip', 'endereco' => 'Praça C, 300', 'email' => 'fastship@gmail.com.br', 'telefone' => '1122-3344'],
        ]);
    }
}
