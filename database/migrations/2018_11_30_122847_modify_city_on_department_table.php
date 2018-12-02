<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyCityOnDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dept', function (Blueprint $table) {
            $table->string('city', 50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dept', function (Blueprint $table) {
            if (Schema::hasTable('dept')) {
                if (Schema::hasColumn('dept', 'city')) {
                    $table->dropColumn('city');
                }
            }
        });
    }
}
