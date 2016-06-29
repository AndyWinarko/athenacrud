<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function ($table) {
            $table->string('nama_bmn')->nullable()->change();
            $table->string('type')->nullable()->change();
            $table->string('tahun')->nullable()->change();
            $table->string('no_urut')->nullable()->change();
            $table->string('jumlah')->nullable()->change();
            $table->string('kondisi')->nullable()->change();
            $table->string('bukti_kepemilikan')->nullable()->change();
            $table->string('penguasaan')->nullable()->change();
            $table->string('asal_perolehan')->nullable()->change();
            $table->string('total_rupiah')->nullable()->change();
            $table->string('keterangan')->nullable()->change();
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
