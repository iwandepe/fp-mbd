<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCustomerDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_customer_demo', function (Blueprint $table) {
            $table->string('customer_id');
            $table->string('customer_type_id');
            $table->primary(['customer_id', 'customer_type_id']);
            $table->foreign('customer_type_id')->references('customer_type_id')->on('customer_demographics');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_customer_demo');
    }
}
