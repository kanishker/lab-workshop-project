<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp', function (Blueprint $table) {
            $table->increments('empno');
            $table->string('ename', 35);
            $table->string('email', 225);
            $table->string('house_number', 10);
            $table->string('street', 200);
            $table->string('city', 55);
            $table->string('state', 55);
            $table->string('postcode', 12);
            $table->string('country', 55);
            $table->string('job', 25);
            $table->unsignedInteger('mgr')->nullable();
            $table->date('hiredate', 35);
            $table->decimal('sal', 7, 2);
            $table->decimal('comm', 7, 2);
            $table->unsignedInteger('deptno')->nullable();
            $table->timestamps();
            /*
                Recursive relationship
            */
            $table->foreign('mgr')
                ->references('empno')
                ->on('emp')
                ->onUpdate('cascade')
                ->onDelete('set null');

            /*
                EMPLOYEE (emp) and DEPARTMENT (dept) tables with a 1:M relationship
            */
            $table->foreign('deptno')
                ->references('deptno')
                ->on('dept')
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
        Schema::dropIfExists('emp');
    }
}
