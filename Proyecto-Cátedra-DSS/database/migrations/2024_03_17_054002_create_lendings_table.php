<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdCuenta')->constrained('bankaccounts')->onDelete('cascade');
            $table->foreignId('idUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('idEncargado')->constrained('employees')->onDelete('cascade');
            $table->decimal('montoPrestado', 10, 2);
            $table->text('descripcción');
            $table->date('fechaPréstamo');
            $table->decimal('montoPagoCuotas', 10, 2);
            $table->enum('estadoPagoPrestamo', ['Pagado', 'Pendiente'])->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('lendings');
    }
};
