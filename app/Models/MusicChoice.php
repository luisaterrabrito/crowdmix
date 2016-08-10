<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MusicChoice extends Model
{
    protected $fillable = ['creator_name', 'link_url', 'video_name', 'video_id'];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
