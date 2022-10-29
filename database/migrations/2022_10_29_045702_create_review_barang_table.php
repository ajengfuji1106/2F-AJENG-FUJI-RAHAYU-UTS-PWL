<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_barang', function (Blueprint $table) {
            $table->increments('IDReview');
                $table->integer('IDBarang');
                $table->text('ReviewBarang');
                $table->timestamp('tanggal_dan_waktu_Review')->useCurrent;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_barang');
    }
}
