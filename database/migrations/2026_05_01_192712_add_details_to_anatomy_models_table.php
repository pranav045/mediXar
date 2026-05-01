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
        Schema::table('anatomy_models', function (Blueprint $table) {
            $table->string('scientific_name')->nullable();
            $table->json('functions')->nullable();
            $table->text('clinical_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('anatomy_models', function (Blueprint $table) {
            $table->dropColumn(['scientific_name', 'functions', 'clinical_note']);
        });
    }
};
