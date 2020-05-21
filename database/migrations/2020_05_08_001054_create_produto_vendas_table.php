<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('sales_id');
            $table->decimal('sales_total' , 5 , 2);
            $table->enum('status' , ['RE' , 'PA' , 'CA']);// RESERVADO , PAGO OU CANCELADO
            $table->foreign('product_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('sales_id')->references('id')->on('vendas')->onDelete('cascade');
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
        Schema::dropIfExists('produto_vendas');
    }
}
