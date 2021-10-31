<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->increments('id_pengurus');
            $table->string('nama');
            $table->string('email');
            $table->string('hp');
            $table->string('gender');
            $table->string ('password');
            $table->string ('aktif');     
        });
    }
    /**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
   Schema::dropIfExists('pengurus');
}
}
    