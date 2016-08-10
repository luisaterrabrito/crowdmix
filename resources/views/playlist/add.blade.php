@extends ('layouts.layout')
@section('content')
    <div class="row content">
        <br>
        <div class="col-xs-12">
            <h1 class="text-center">{{ $playlist->name }}</h1>
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <form method="POST" action="{{ route('playlist.add', ['id'=>$playlist->id]) }}" id="add_form">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name"
                                   required>
                        </div>
                    </div>
                </div>
                @for($i = 1;$i<=10;$i++)
                    <div id="music_container">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                Music #{{ sprintf("%02d",$i) }}
                            </div>
                            <div class="col-md-6" style="padding-right: 0px;">
                                <div class="panel panel-default">
                                    <div class="form-group no-margin-bottom">
                                        <input type="text" class="form-control no-margin-bottom " id="name"
                                               placeholder="Type to search via YouTube" required
                                               data-handler="youtube_query" data-id="{{ $i }}">
                                    </div>
                                    <ul class="list-group hidden search-results" onclick="stop_propgation()"
                                        id="search-results-list-{{ $i }}}"
                                        data-id="{{ $i }}">
                                    </ul>
                                </div>
                            </div>
                            <input type="hidden"  value="" data-type="video_info" name="videos[{{ $i }}][name]" id="videos_{{ $i }}_name">
                            <input type="hidden"  value="" data-type="video_info"  name="videos[{{ $i }}][video_code]" id="videos_{{ $i }}_video_code">
                            <input type="hidden"  value="" data-type="video_info" name="videos[{{ $i }}][video_url]" id="videos_{{ $i }}_video_url">
                            <div class="col-md-4 text-center">
                                <span class="form-control-static video-label" data-id="{{ $i }}"></span>
                            </div>
                        </div>
                    </div>
                @endfor
                <br>
                <div class="text-center">
                    <button type="submit" class="btn ">Submeter</button>
                </div>
            </form>
        </div>
    </div>
    <div id="player" class="absolute-player"></div>
@stop

@section('scripts')
    <script type="text/javascript">
        var youtubeQueryRoute = "{{ route('youtube.query') }}";
        var play_video;
        var select_video;
        var player;
        var deleteEntry;
        var stop_propgation;
        $(window).on('load', function () {
            PlaylistModule.initAddView();
        });
    </script>
@stop
