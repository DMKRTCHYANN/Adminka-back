<?php

use App\Enums\CarStatusEnum;
use App\Enums\CarTypeEnum;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->unsignedInteger('price');
            $table->integer('mileage');
            $table->enum('condition', CarTypeEnum::values())->default(CarTypeEnum::NEW);
            $table->enum('status', CarStatusEnum::values())->default(CarStatusEnum::AVAILABLE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
