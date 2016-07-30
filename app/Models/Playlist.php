<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = ['name', 'description', 'is_playable'];

    public function music_choices()
    {
        return $this->hasMany(MusicChoice::class);
    }
}
