<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aktivitaspokok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aktivitaspokok', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AktivitasPokok');
            $table->text('Catatan');
            $table->integer('Userid');
            $table->Binary('RuleVer');
            $table->timestamps();
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
