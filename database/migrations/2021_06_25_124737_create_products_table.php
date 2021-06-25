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
            $table->smallIncrements('product_id');
            $table->string('product_name', 40);
            $table->smallInteger('supplier_id');
            $table->smallInteger('category_id');
            $table->string('quantity_per_unit', 20);
            $table->double('unit_price');
            $table->smallInteger('units_in_stock');
            $table->smallInteger('units_on_order');
            $table->smallInteger('reorder_level');
            $table->integer('discontinued');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
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
