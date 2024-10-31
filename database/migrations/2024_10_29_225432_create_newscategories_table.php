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
        Schema::create('newscategories', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();
            $table->string('title', 256);
            $table->integer('image');
            $table->text('description');
            $table->string('page_title', 256);
            $table->string('meta_description', 256);
            $table->string('url_title', 256);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newscategories');
    }
};
