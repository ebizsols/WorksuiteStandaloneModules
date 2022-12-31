<?php

use App\Models\DashboardWidget;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrivateDashboardTypeToDashboardWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        $widgets = [
            ['widget_name' => 'profile', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'shift_schedule', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'birthday', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'notices', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'tasks', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'projects', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'my_task', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
            ['widget_name' => 'my_calender', 'status' => 1, 'dashboard_type' => 'private-dashboard'],

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
    }

}
