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
        Schema::create('paymentsaccount', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idCuentaEmisora')->constrained('bankaccounts')->onDelete('cascade');
            $table->foreignId('idCuentaReceptora')->constrained('bankaccounts')->onDelete('cascade');
            $table->foreignId('idUsuarioEmisor')->constrained('users')->onDelete('cascade');
            $table->decimal('cantidadabono', 10, 2);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('paymentsaccount');
    }
};
