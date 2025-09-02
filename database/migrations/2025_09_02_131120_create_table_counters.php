<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Bikin table
     */
    public function up(): void
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->string('id', 100)->nullable(false)->primary();
            $table->integer('counter')->nullable(false)->default(0);
        });
    }

    /**
     * Rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
