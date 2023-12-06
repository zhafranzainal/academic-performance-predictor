<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('mothers', function (Blueprint $table) {
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

            $table
                ->foreign('occupation_id')
                ->references('id')
                ->on('occupations')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mothers', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['highest_qualification_id']);
            $table->dropForeign(['occupation_id']);
        });
    }
};
