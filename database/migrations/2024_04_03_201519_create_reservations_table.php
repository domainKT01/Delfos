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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->unsignedBigInteger('id_room');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status');
            $table->date('in');
            $table->date('out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
