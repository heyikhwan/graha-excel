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
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();
            $table->string('title', 256)->default('');
            $table->integer('image');
            $table->text('description');
            $table->unsignedInteger('product')->default(1)->index('attributes_product_foreign');
            $table->integer('idx')->index('idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};
