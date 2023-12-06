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
        Schema::create('companyinfos', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('pay');
            $table->string('vacancy');
            $table->string('desc');
            $table->unsignedBigInteger('companyid')->nullable();
            $table->foreign('companyid')->references('id')->on('companymains');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companyinfos');
    }
};
