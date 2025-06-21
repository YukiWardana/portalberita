<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('NEWS_ID'); // Primary key
            $table->unsignedBigInteger('USER_ID')->nullable();
            $table->unsignedBigInteger('CATEGORY_ID')->nullable();
            $table->string('JUDUL', 255);
            $table->text('DESKRIPSI');
            $table->text('KONTEN');
            $table->dateTime('TANGGAL_PUBLIKASI');
            $table->string('STATUS_BERITA', 10);

            // Foreign keys
            $table->foreign('USER_ID')->references('USER_ID')->on('users')->onDelete('set null');
            $table->foreign('CATEGORY_ID')->references('CATEGORY_ID')->on('category')->onDelete('set null');

            // $table->timestamps(); // Uncomment if you want Laravel's default timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
