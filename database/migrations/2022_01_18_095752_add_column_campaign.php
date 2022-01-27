<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCampaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaigns', function($table) {
            $table->string('description_2')->after('description')->nullable();
            $table->string('description_3')->after('description_2')->nullable();
            $table->string('description_4')->after('description_3')->nullable();
            $table->string('description_5')->after('description_4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaigns', function($table) {
            $table->dropColumn('description_2');
            $table->dropColumn('description_3');
            $table->dropColumn('description_4');
            $table->dropColumn('description_5');
        });
    }
}
