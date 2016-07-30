<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidg.
     */
    public function up()
    {
        Schema::create('music_choices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('creator_name');
            $table->string('link_url');
            $table->string('video_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('music_choices');
    }
}
