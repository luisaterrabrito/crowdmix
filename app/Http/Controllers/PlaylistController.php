<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

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

    public function doAdd($id)
    {
        dd(request()->input());
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
