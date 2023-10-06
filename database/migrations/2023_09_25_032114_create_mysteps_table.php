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
        Schema::create('mysteps', function (Blueprint $table) {
            
            $table->string('nama');
            $table->string('alamat');
            $table->string('gred');
            $table->string('gaji');
            $table->string('tarikh_masuk');
            $table->string('tarikh_tamat');
            $table->string('tempoh');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mysteps');
    }
};
