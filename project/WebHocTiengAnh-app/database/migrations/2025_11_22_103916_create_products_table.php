<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // File: database/migrations/xxxx_xx_xx_create_products_table.php

public function up(): void
{
    // This migration was replaced by a newer products migration (timestamp 104313).
    // Keep as no-op to avoid duplicate table creation.
}
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
