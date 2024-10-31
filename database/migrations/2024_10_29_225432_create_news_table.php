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
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();
            $table->string('title', 256)->default('');
            $table->string('category', 255)->default('');
            $table->integer('image');
            $table->longText('description');
            $table->string('page_title', 256);
            $table->text('meta_description');
            $table->string('url_title', 256);
            $table->unsignedInteger('news_category_id')->default(1);
            $table->timestamp('dt_published');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
