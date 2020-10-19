<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoziloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vozilo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('proizvodjac');
            $table->string('model');
            $table->integer('godina_proizvodnje');
            $table->string('registarska_oznaka')-> nullable();
            $table->integer('broj_vrata');
            $table->string('boja');
            $table->string('tip_pogonskog_goriva');
            $table->float('zapremina_motora')-> nullable();
            $table->float('snaga_motora')-> nullable();         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vozilo');
    }
}
