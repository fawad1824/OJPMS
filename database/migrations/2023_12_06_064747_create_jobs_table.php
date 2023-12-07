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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('skills');
            $table->string('education');
            $table->string('location');
            $table->string('vacancy');
            $table->string('jobtype');
            $table->string('salary');
            $table->string('date');
            $table->string('applicationdate');
            $table->string('status');

            $table->unsignedBigInteger('companyid')->nullable();
            $table->unsignedBigInteger('userid')->nullable();

            $table->foreign('companyid')->references('id')->on('company');
            $table->foreign('userid')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
