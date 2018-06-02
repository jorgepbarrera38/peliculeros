<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('image');
            $table->text('description');
            $table->smallInteger('duration');
            $table->date('launching');//Lanzamiento
            $table->string('trailer'); //Url del trailer
            $table->tinyInteger('size');//Tamaño
            $table->enum('format', ['MP4', 'MKV', 'AVI', 'WMV', 'MOV']);
            $table->enum('quality', ['1080P', '720P']);//Calidad
            $table->string('urldownload');

            $table->integer('director_id')->unsigned();//Director
            $table->foreign('director_id')->references('id')->on('directors');

            $table->integer('country_id')->unsigned();//País
            $table->foreign('country_id')->references('id')->on('countries');

            $table->integer('gender_id')->unsigned();//Género
            $table->foreign('gender_id')->references('id')->on('Genders');

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
        Schema::dropIfExists('movies');
    }
}
