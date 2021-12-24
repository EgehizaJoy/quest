<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_Name');
            $table->string('details');
            $table->integer('InStock');
            $table->string('Type');
            $table->string('capacity');
            $table->string('source');
            $table->integer('price');
            $table->string('description');
            $table->string('nutrition');
            $table->string('vitamins');
            $table->string('minerals');
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
}
