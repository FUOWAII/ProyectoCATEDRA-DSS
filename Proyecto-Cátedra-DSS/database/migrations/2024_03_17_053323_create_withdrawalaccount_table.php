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
        Schema::create('withdrawalaccount', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdCuenta')->constrained('bankaccounts')->onDelete('cascade');
            $table->foreignId('idUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('idEncargado')->constrained('employees')->onDelete('cascade');
            $table->decimal('cantidadretiro', 10, 2);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('withdrawalaccount');
    }
};
