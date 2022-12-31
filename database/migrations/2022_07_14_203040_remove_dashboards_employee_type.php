<?php

use App\Models\ModuleSetting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDashboardsEmployeeType extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ModuleSetting::where('module_name', 'dashboards')->where('type', 'employee')->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}
