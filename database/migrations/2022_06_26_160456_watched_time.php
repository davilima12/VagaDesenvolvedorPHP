<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WatchedTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watched_time', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('channel_id')->nullable();
            $table->float('minutes')->nullable();
            $table->dateTime('date')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('channel_id')->references('id')->on('channel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('watched_time', function (Blueprint $table) {
            $table->dropForeign('watched_time_user_id_foreign');
            $table->dropForeign('watched_time_channel_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('watched_time');
    }
}
