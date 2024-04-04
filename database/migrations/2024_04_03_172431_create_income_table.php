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
        Schema::create('income', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_room');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status');
            $table->string('from');
            $table->string('to');
            $table->string('requirements')->nullable();
            $table->integer('days');
            $table->string('typePayment')->nullable();
            $table->string('payment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income');
    }
};
