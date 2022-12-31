<?php

use App\Models\DashboardWidget;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeekTimelogWidgetSettingPrivateDashboard extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $widgets = [
            ['widget_name' => 'week_timelog', 'status' => 1, 'dashboard_type' => 'private-dashboard'],
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
