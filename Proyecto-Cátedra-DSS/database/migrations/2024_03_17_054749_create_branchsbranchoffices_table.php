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
        Schema::create('branchoffices', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dirección');
            $table->string('estado');
            $table->foreignId('idEncargado')->constrained('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('branchsbranchoffices');
    }
};
