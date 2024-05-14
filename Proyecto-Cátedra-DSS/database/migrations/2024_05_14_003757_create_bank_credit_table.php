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
        Schema::create('bank_credits', function (Blueprint $table) {
            $table->id();
            $table->string('persona_receptora_abono');
            $table->string('DUI_persona_abono');
            $table->foreignId('id_cuenta_receptora')->constrained('bankaccounts')->onDelete('cascade');
            $table->decimal('cantid_adabono', 10, 2);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_credit');
    }
};
