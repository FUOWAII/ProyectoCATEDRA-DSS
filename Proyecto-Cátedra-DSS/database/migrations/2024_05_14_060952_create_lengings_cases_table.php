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
        Schema::create('lengings_cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdPrestamo')->constrained('lendings')->onDelete('cascade');
            $table->enum('estadoPagoPrestamo', ['Pagado', 'Pendiente'])->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lengings_cases');
    }
};
