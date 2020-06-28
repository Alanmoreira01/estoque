<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_produto', function (Blueprint $table) {


            $table->increments('id');
            $table->string('ds_categoria_produto',255);
            $table->integer('id_tipo_produto')->unsigned();
            $table->foreign('id_tipo_produto')->references('id')->on('tipo_produto');


            $table->timestamps();
            $table->softDeletes();





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_produto');
    }
}
