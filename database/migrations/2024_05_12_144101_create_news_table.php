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
        Schema::create('tbl_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users")->OnDelete("cascade");
            $table->enum("jenis_wisata", ["pantai", "pegunungan"]);
            $table->string("title");
            $table->string("tag");
            $table->string("short_deskripsi");
            $table->string("long_deskripsi");
            $table->string("location");
            $table->integer("harga");
            $table->string("ranting");
            $table->string("url_images");
            $table->timestamps();
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
