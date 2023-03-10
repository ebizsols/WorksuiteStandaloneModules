<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimelogToCutomFieldGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        DB::table('custom_field_groups')->insert(
            [
                'name' => 'Time Log', 'model' => 'App\Models\ProjectTimeLog',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('custom_field_groups')->where('name', 'Time Log')->delete();
    }

}
