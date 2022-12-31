<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemarkColumnShift extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_shift_schedules', function (Blueprint $table) {
            $table->text('remarks')->nullable();
        });

        Schema::table('employee_shift_change_requests', function (Blueprint $table) {
            $table->text('reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_shift_schedules', function (Blueprint $table) {
            $table->dropColumn(['remarks']);
        });
        Schema::table('employee_shift_change_requests', function (Blueprint $table) {
            $table->dropColumn(['reason']);
        });
    }

}
