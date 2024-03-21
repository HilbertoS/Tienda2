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
        Schema::create('linea_facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_id')->constrained('facturas', 'id')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained('productos', 'id');
            $table->unsignedInteger('cantidad');
            $table->integer('iva')->default(21);
            $table->decimal('precio', 8, 2);
            $table->integer('descuento')->default(0);
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linea_facturas');
    }
};
