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
            $table->foreignId('IdCliente')->constrained('users')->onDelete('cascade');
            $table->decimal('montoPrestado', 10, 2);
            $table->integer('intereses');
            $table->date('fechaPréstamo');
            $table->decimal('sueldo_cliente', 10, 2);
            $table->decimal('abono_mensual', 10, 2);
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
