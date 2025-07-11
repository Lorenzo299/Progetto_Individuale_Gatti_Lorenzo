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
        
           Schema::table('players', function (Blueprint $table) {
            $table->unsignedBigInteger('position_id')->after('user_id')->nullable();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('SET NULL');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {
           $table->dropForeign(['position_id']);
           $table->dropColumn('position_id');
        });
    }
};
