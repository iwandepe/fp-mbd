<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('customer_id')->primary();
            $table->string('company_name', 40);
            $table->string('contact_name', 30);
            $table->string('contact_title', 30);
            $table->string('address', 60);
            $table->string('city', 15);
            $table->string('region', 15);
            $table->string('postal_code', 10);
            $table->string('country', 15);
            $table->string('phone', 24);
            $table->string('fax', 24);
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
        Schema::dropIfExists('customers');
    }
}
