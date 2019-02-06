<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aktivitasdetil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aktivitasdetil', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('Timestamp');
            $table->string('Kategori');
            $table->string('AktvitasPokok');
            $table->text('AktivitasDetil');
            $table->string('SumberPenugasan');
            $table->integer('KuantitasTarget');
            $table->string('SatuanTarget');
            $table->tinyInteger('KualitasTarget');
            $table->integer('KuantitasRealisasi');
            $table->string('SatuanRealisasi');
            $table->tinyInteger('KualitasRealisasi');
            $table->text('ButirKegiatan');
            $table->float('AngkaKredit');
            $table->float('Penghitungan');
            $table->float('NilaiCapaian');
            $table->string('KondisiProgress');
            $table->text('Catatan');
            $table->integer('UserId');
            $table->binary('RuleVer');
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
