<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categoria', function (Blueprint $table) {
            $table->increments('id');
                $table->string('ds_sub_categoria',255);
                $table->integer('id_categoria')->unsigned();
                $table->foreign('id_categoria')->references('id')->on('categoria_produto');


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
        Schema::dropIfExists('sub_categoria');
    }
}
