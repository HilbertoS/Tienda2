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
        //
        Schema::create('proveedors_almacens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proveedor_id')->constrained('proveedors', 'id');
            $table->foreignId('almacen_id')->constrained('almacens', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
