<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdToUserprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userprofiles', function (Blueprint $table) {
            //
            $table->foreignId('user_id')->constrained();
            $table->string('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userprofiles', function (Blueprint $table) {
            //
            $table->dropColumn('user_id');
            $table->dropColumn('avatar');
        });
    }
}
