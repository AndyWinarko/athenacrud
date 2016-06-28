<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function(Blueprint $table) {
            $table->increments('id');
            $table->string('id_bmn')->unique();
            $table->string('nama_bmn');
            $table->string('type');
            $table->string('tahun');
            $table->string('no_urut');
            $table->integer('jumlah');
            $table->string('kondisi');
            $table->string('bukti_kepemilikan');
            $table->string('penguasaan');
            $table->string('asal_perolehan');
            $table->integer('total_rupiah');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
