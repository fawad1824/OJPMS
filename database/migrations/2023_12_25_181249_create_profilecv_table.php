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
        Schema::create('profilecv', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surename');
            $table->string('dob');
            $table->string('gender');
            $table->string('martial');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('address');
            $table->string('graduation');
            $table->string('university');
            $table->string('degree');
            $table->string('level');
            $table->string('course');
            $table->string('info');
            $table->string('company');
            $table->string('position');
            $table->string('locationc');
            $table->string('from');
            $table->string('to');
            $table->string('infocompany');
            $table->string('skills');
            $table->unsignedBigInteger('userid')->nullable();
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profilecv');
    }
};
