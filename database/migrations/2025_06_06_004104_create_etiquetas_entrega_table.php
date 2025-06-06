<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etiquetas_entrega', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendedor_id')->constrained('vendedores')->onDelete('cascade');
            $table->foreignId('transportadora_id')->constrained('transportadoras')->onDelete('cascade');
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
            $table->date('data_envio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquetas_entrega');
    }
};
