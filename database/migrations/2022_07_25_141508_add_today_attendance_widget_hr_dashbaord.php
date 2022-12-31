<?php

use App\Models\DashboardWidget;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTodayAttendanceWidgetHrDashbaord extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $widgets = [
            ['widget_name' => 'total_today_attendance', 'status' => 1, 'dashboard_type' => 'admin-hr-dashboard'],
        ];

        foreach ($widgets as $widget) {
            DashboardWidget::create($widget);
        }
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
