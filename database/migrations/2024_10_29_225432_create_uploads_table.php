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
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->default('');
            $table->string('path', 250);
            $table->string('extension', 20);
            $table->string('caption', 250);
            $table->unsignedBigInteger('user_id')->default(1);
            $table->string('hash', 250);
            $table->boolean('public')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
