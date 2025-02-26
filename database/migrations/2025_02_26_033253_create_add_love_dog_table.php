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
        Schema::table('dogs', function (Blueprint $table) {
            $table->integer('love');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->integer('love');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dogs', function (Blueprint $table) {
            $table->dropColumn('love');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('love');
        });
    }
};
