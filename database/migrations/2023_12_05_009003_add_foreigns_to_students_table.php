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
        Schema::table('students', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('highest_qualification_id')
                ->references('id')
                ->on('highest_qualifications')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            // $table
            //     ->foreign('country_id')
            //     ->references('id')
            //     ->on('countries')
            //     ->onUpdate('CASCADE')
            //     ->onDelete('CASCADE');

            $table
                ->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('father_id')
                ->references('id')
                ->on('fathers')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('mother_id')
                ->references('id')
                ->on('mothers')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['highest_qualification_id']);
            $table->dropForeign(['country_id']);
            $table->dropForeign(['course_id']);
            $table->dropForeign(['father_id']);
            $table->dropForeign(['mother_id']);
        });
    }
};
