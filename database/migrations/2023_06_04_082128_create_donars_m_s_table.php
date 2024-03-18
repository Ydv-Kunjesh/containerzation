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
        Schema::create('donars_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('mobile');
            $table->string('donation');
            $table->string('address');
            $table->string('massage');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donars_m_s');
    }
};
