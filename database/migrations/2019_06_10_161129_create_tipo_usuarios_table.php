<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->timestamps();
        });

        $tipoUsuario = new \App\TipoUsuario();
        $tipoUsuario->descricao = 'Professor';
        $tipoUsuario->save();

        $tipoUsuarioAluno = new \App\TipoUsuario();
        $tipoUsuarioAluno->descricao = 'Aluno';
        $tipoUsuarioAluno->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuarios');
    }
}
