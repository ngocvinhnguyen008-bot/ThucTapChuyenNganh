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
        // Duplicate migration intentionally left empty to avoid creating the table twice.
        // The primary products table is defined in the other migration file.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op to avoid dropping the products table accidentally.
    }
};
