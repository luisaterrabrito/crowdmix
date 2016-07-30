<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MusicChoice extends Model
{
    protected $fillable = ['name', 'link_url', 'video_name'];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
