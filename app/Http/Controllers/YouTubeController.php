<?php

namespace App\Http\Controllers;

use Youtube;
use Illuminate\Http\Request;
use App\Http\Requests;

class YouTubeController extends Controller
{
    public function query()
    {
        if (request()->has('query')) {
            $query = request()->input('query');
            $videoList = Youtube::searchVideos($query);
            $videoIds = array_map(function ($video) {
                return $video->id->videoId;
            }, $videoList);
            $videosInfo = Youtube::getVideoInfo($videoIds);
            return response()->json(['stats' => true, 'error' => null, 'data' => $videosInfo]);
        }
        return response()->json(['stats' => false, 'error' => "", 'data' => null]);
    }

    public function queryUrl()
    {
        //TODO FETCH VIDEO INFO FROM URL CODE
    }
}
