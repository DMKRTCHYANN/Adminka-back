<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('buildings', function (Blueprint $table) {
            if (!Schema::hasColumn('buildings', 'long_description')) {
                $table->json('long_description')->nullable();
            } else {
                $table->json('long_description')->nullable()->change();
            }

            if (!Schema::hasColumn('buildings', 'short_description')) {
                $table->json('short_description')->nullable();
            } else {
                $table->json('short_description')->nullable()->change();
            }
        });
    }

    public function down(): void
    {
        Schema::table('buildings', function (Blueprint $table) {
            if (Schema::hasColumn('buildings', 'long_description')) {
                $table->dropColumn('long_description');
            }
            if (Schema::hasColumn('buildings', 'short_description')) {
                $table->dropColumn('short_description');
            }
        });
    }
};
