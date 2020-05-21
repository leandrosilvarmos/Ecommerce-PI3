<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->text('description');
            $table->string('type');
            $table->decimal('price' , 5 , 2);
            $table->decimal('discount' , 5 , 2);
            $table->integer('amount');
            $table->foreign('category_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('produtos');
    }
}
