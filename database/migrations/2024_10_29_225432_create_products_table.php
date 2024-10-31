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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();
            $table->string('title', 256)->default('');
            $table->text('description');
            $table->string('color', 256)->default('[]');
            $table->string('size', 256)->default('[]');
            $table->integer('dimention');
            $table->unsignedInteger('categories')->default(1)->index('products_categories_foreign');
            $table->integer('image')->default(1);
            $table->unsignedInteger('sub_cat')->default(1);
            $table->char('page_title', 255);
            $table->text('meta_description');
            $table->string('url_title', 256);
            $table->integer('ordering')->default(0);
            $table->unsignedInteger('sidebar_ordering')->default(0);
            $table->integer('Aksesoris');
            $table->integer('cara_pasang');
            $table->string('slideshows', 256)->default('[]');
            $table->string('below_banner_tagline', 256);
            $table->string('below_banner_title', 256);
            $table->text('below_banner_desc');
            $table->integer('right_banner');
            $table->integer('banner_bawah');
            $table->integer('keunggulan_produk_1');
            $table->integer('keunggulan_produk_2');
            $table->integer('keunggulan_produk_3');
            $table->integer('keunggulan_produk_4');
            $table->integer('katalog_link');
            $table->string('banner_bawah_link', 256);
            $table->string('keunggulan_text_1', 256);
            $table->string('keunggulan_text_2', 256);
            $table->string('keunggulan_text_3', 256);
            $table->string('keunggulan_text_4', 256);
            $table->integer('keunggulan_link_4');
            $table->string('katalog_label', 256);
            $table->integer('keunggulan_link_3');
            $table->integer('keunggulan_link_2');
            $table->integer('keunggulan_link_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
