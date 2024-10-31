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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();
            $table->unsignedInteger('parent')->default(1)->index('sub_categories_parent_foreign');
            $table->string('name', 256)->default('');
            $table->integer('image');
            $table->string('page_title', 256);
            $table->string('meta_description', 256);
            $table->string('url_title', 256);
            $table->unsignedSmallInteger('idx')->nullable()->default(0)->index('sub_categories_idx');
            $table->unsignedInteger('ordering')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
