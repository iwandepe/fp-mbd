<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_territories', function (Blueprint $table) {
            $table->smallInteger('employee_id');
            $table->string('territory_id', 20);
            $table->primary(['employee_id','territory_id']);
            $table->foreign('territory_id')->references('territory_id')->on('territories');
            $table->foreign('employee_id')->references('employee_id')->on('employees');
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
        Schema::dropIfExists('employee_territories');
    }
}
