<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->date('date_of_birth')->after('name')->nullable();
            $table->string('place_of_birth')->after('date_of_birth')->nullable();
            $table->string('phone')->after('place_of_birth');
            $table->string('address')->after('password')->nullable();
            $table->string('img_profile')->after('address')->default('/assets/img/img_profile.png');
            $table->string('notes')->after('img_profile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('date_of_birth');
            $table->dropColumn('place_of_birth');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('img_profile');
            $table->dropColumn('notes');
        });
    }
}
