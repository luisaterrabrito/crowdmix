<?php

namespace App\Http\Controllers;

use App\Models\MusicChoice;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Requests\SaveMusicChoice;
use App\Http\Requests;

class PlaylistController extends Controller
{
    public function add($id)
    {
        $playlist = Playlist::find($id);
        if (!is_null($playlist)) {
            return view('playlist.add', ['playlist' => $playlist]);
        }
        return redirect('/');
    }

    public function doAdd(/*SaveMusicChoice $request,*/
        $id)
    {
        $playlist = Playlist::find($id);
        $videos = request()->input('videos');
        $musicChoices = [];
        foreach ($videos as $video) {
            $musicChoices[] = new MusicChoice([
                'creator_name' => request()->input('name'),
                'video_id' => $video['video_code'],
                'video_name' => $video['name'],
                'link_url' => $video['video_url']
            ]);
        }
        $playlist->music_choices()->saveMany($musicChoices);
        return redirect(route('homepage'));
    }

    public function play($id)
    {
        $playlist = Playlist::find($id);
        if (!is_null($playlist)) {
            return view('playlist.play', ['playlist' => $playlist]);
        }
        return redirect('/');
    }
}
