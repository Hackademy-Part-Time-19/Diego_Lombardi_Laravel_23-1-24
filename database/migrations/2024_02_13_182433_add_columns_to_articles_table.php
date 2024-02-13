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
        Schema::table('articles', function (Blueprint $table) {
            $table->string('title', 550)->change();
            $table->text('description')->change();
            $table->string('category', 20)->change();
            $table->string('author', 20)->change();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            
            $table->string('title', 550)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->string('category', 20)->nullable(false)->change();
            $table->string('author', 20)->nullable(false)->change();
        });
    }
};
