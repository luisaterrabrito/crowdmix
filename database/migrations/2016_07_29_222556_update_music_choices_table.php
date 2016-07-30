<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMusicChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('music_choices', function($table)
        {
            $table->integer('playlist_id')->unsigned();
            $table->foreign('playlist_id')->references('id')->on('playlists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('music_choices', function($table)
        {
            $table->dropForeign('music_choices_playlist_id_foreign');
            $table->dropColumn('playlist_id');
        });
    }
}
