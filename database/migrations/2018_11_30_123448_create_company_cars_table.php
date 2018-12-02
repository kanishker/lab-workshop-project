<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('licence_number', 15);
            $table->integer('model_year');
            $table->string('make', 25);
            $table->string('model', 25);
            $table->unsignedInteger('empno')->nullable();
            $table->timestamps();
            /*
                 EMPLOYEE (emp) and COMPANY CARDS (company_cars) tables with a 1:1 relationship
             */
            $table->foreign('empno')
                ->references('empno')
                ->on('emp')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_cars');
    }
}
