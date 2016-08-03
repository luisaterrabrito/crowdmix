<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomepageController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        return view('homepage', ['playlists'=>$playlists]);
    }
}
