<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->foreignId('highest_qualification_id');
            $table->foreignId('country_id');
            $table->foreignId('course_id');
            $table->foreignId('father_id');
            $table->foreignId('mother_id');
            $table->enum('gender', ['male', 'female']);
            $table->tinyInteger('enrolled_age');
            $table->enum('marital_status', [
                'single',
                'married',
                'widower',
                'divorced',
                'de facto union',
                'judicial separation',
            ]);
            $table->boolean('is_international');
            $table->boolean('is_scholarship_holder');
            $table->boolean('is_debtor');
            $table->boolean('is_displaced');
            $table->boolean('has_educational_special_needs');
            $table->tinyInteger('taken_credit');
            $table->tinyInteger('earned_credit');
            $table->float('cgpa');
            $table->enum('enrollment_status', [
                'dropout',
                'enrolled',
                'graduate',
            ]);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
