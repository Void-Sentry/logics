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
        Schema::create('pedido_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_pedido');
            $table->bigInteger('id_item');
            $table->String('cliente');
            $table->String('quantidade');
            $table->String('descricao');
            $table->unsignedFloat('peso');
            $table->foreignId('carga_id')
                ->constrained('cargas')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('endereco_id')
                ->constrained('enderecos')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_items');
    }
};
