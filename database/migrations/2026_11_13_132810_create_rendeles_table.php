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
        Schema::create('rendeles', function (Blueprint $table) {
            $table->id();
            $table->string('pizzanev');
            $table->integer('darab');
            $table->dateTime('felvetel');
            $table->dateTime('kiszallitas')->nullable();
            $table->timestamps();

            $table->foreign('pizzanev')->references('nev')->on('pizza')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendeles');
    }
};
