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
        Schema::create('applyjobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companyid')->nullable();
            $table->unsignedBigInteger('jobid')->nullable();
            $table->unsignedBigInteger('userid')->nullable();
            $table->string('status');
            $table->string('date');
            $table->string('desc');
            $table->foreign('companyid')->references('id')->on('company');
            $table->foreign('jobid')->references('id')->on('jobs');
            $table->foreign('userid')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applyjobs');
    }
};
