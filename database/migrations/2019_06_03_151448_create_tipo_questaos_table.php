<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->timestamps();
        });

        $tipoQuestaoObjetiva = new \App\TipoQuestao();
        $tipoQuestaoObjetiva->descricao = 'Objetiva';
        $tipoQuestaoObjetiva->save();

        $tipoQuestaoDiscurssiva = new \App\TipoQuestao();
        $tipoQuestaoDiscurssiva->descricao = 'Discurssiva';
        $tipoQuestaoDiscurssiva->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_questaos');
    }
}
