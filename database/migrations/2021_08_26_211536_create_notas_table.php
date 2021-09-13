<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();//integer('id', 11)->autoIncremet();
            $table->foreignId('id_matricula')->constrained('matriculas');
            $table->integer('ta1');
            $table->integer('ta2');
            $table->integer('ta3');
            $table->integer('ta4');
            $table->integer('emc');
            $table->integer('ef');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
