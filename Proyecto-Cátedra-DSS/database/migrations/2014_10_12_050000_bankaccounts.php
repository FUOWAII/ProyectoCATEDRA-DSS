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
        Schema::create('bankaccounts', function (Blueprint $table) {
            $table->id();
            $table->string('NumeroCuenta')->unique();
            $table->foreignId('IdUsuario')->constrained('users')->onDelete('cascade');
            $table->decimal('SaldoCuenta', 10, 2)->default(0);
            $table->date('FechaApertura');
            $table->enum('Estado', ['Activa', 'Inactiva'])->default('Activa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bankaccounts');
    }
};
