<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->smallIncrements('order_id');
            $table->string('customer_id');
            $table->smallInteger('employee_id');
            $table->date('order_date');
            $table->date('required_date');
            $table->date('shipped_date');
            $table->smallInteger('ship_via');
            $table->double('freight');
            $table->string('ship_name', 40);
            $table->string('ship_address', 60);
            $table->string('ship_city', 15);
            $table->string('ship_region', 15);
            $table->string('ship_postal', 10);
            $table->string('ship_country', 15);
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('employee_id')->references('employee_id')->on('employees');
            $table->foreign('ship_via')->references('shipper_id')->on('shippers');
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
        Schema::dropIfExists('orders');
    }
}
