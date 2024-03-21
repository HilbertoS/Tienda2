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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('imagen')->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->foreignId('categoria_id')->constrained('categorias', 'id')->onDelete('cascade');
            $table->decimal('precio', 8, 2)->default(0);
            $table->integer('descuento')->default(0);
            $table->string('estado')->default('Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
