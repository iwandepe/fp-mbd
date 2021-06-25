<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->smallIncrements('employee_id');
            $table->string('last_name', 20);
            $table->string('first_name', 10);
            $table->string('title', 30);
            $table->string('title_of_courtesy', 25);
            $table->date('birth_date');
            $table->date('hire_date');
            $table->string('address', 60);
            $table->string('city', 15);
            $table->string('region', 15);
            $table->string('postal_code', 10);
            $table->string('country', 15);
            $table->string('home_phone', 24);
            $table->string('extension', 4);
            $table->binary('photo');
            $table->text('notes');
            $table->smallInteger('reports_to');
            $table->string('photo_path', 255);

            $table->foreign('reports_to')->references('employee_id')->on('employees');
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
        Schema::dropIfExists('employees');
    }
}
