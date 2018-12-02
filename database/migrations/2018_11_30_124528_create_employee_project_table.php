<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_project', function (Blueprint $table) {
            $table->unsignedInteger('employee_empno');
            $table->unsignedInteger('project_projno');
            $table->decimal('hours', 9, 2);
            $table->timestamps();
            $table->primary(['employee_empno', 'project_projno']);
            $table->foreign('employee_empno')
                ->references('empno')
                ->on('emp')
                ->onDelete('cascade');
            $table->foreign('project_projno')
                ->references('projno')
                ->on('proj')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_project');
    }
}
