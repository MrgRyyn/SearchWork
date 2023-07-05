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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('project_name');
            $table->string('project_method');
            $table->string('project_category');
            $table->decimal('price', 10, 2)->nullable()->default(0);
            $table->decimal('price_2', 10, 2)->nullable()->default(0);
            $table->decimal('price_3', 10, 2)->nullable()->default(0);
            $table->decimal('item_time', 10, 2)->nullable()->default(0);
            $table->decimal('item_time2', 10, 2)->nullable()->default(0);
            $table->decimal('item_untis_time', 10, 2)->nullable()->default(0);
            $table->decimal('item_units_time2', 10, 2)->nullable()->default(0);
            $table->binary('image');
            $table->binary('image3')->nullable();
            $table->binary('image4')->nullable();
            $table->binary('image2')->nullable();
            $table->string('location');
            $table->longText('item_descrition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
