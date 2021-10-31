<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
                $table-> increments ('id_Santri');
                $table->string ('nama_santri');
                $table->string ('jenis_kelamin');
                $table->date   ('tanggal_lahir');
                $table->string ('kota_lahir');
                $table->string ('nama_ortu');
                $table->string ('alamat_ortu');                        
                $table->string ('no_hp');
                $table->string ('email');
                $table->string ('password');
                $table->date   ('tanggal_masuk');
                $table->string ('aktif');
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
       Schema::dropIfExists('santri');
    }
}