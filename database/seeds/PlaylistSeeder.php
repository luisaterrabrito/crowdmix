<?php

use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Playlist::firstOrCreate(['name' => 'Mistério de Seixas']);
    }
}
