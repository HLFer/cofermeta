<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('user_id')->unsigned();
            
            //Criação de chave estrangeira da tabela de usuários - onDelete como cascade para quando o usuário for deletado,
            // todas as noticias relacionadas a ele também sejam apagadas.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            //Título da notícia - Limite de 200 caracteres(pode ser alterado)
            $table->string('title', 200);
            
            //Descrição da notícia - Texto
            $table->text('description');

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
        Schema::dropIfExists('posts');
    }
}
