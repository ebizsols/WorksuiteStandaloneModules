<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSettingsAddLicenseType extends Migration
{

    public function up()
    {
        Schema::table('organisation_settings', function (Blueprint $table) {
            $table->string('license_type', 20)->after('purchase_code')->nullable();
        });
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
