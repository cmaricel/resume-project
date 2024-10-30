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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->integer('age');
            $table->string('weight');
            $table->string('religion');
            $table->string('citizenship');
            $table->string('height');
            $table->string('civil_status');
            $table->string('tertiary_education');
            $table->string('secondary_education');
            $table->string('eligibility');
            $table->text('skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
