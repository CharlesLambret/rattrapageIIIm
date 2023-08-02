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
        Schema::create('articles_commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commandes_id')
            ->after('id')
            ->constrained('commandes')
            ->onDelete('cascade');
            $table->foreignId('articles_id')
            ->after('id')
            ->constrained('articles')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles_commandes', function (Blueprint $table) {
            $table->dropColumn('commandes_id');
            $table->dropColumn('articles_id');
        });
    }
};