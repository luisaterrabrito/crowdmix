@extends ('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-xs-12">
                <h1 class="text-center">{{ $playlist->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 text-center">
                <div class="player-wrap">
                    <div id="player"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <span class="list-group-item">
                        Music list
                    </span>
                    <div class="mCustomScrollbar" data-mcs-theme="dark" id="musicList">
                        @foreach($playlist->music_choices->unique("video_id") as $choice)
                            <button class="list-group-item music" data-url="{{ $choice->link_url }}"
                                    data-video-id="{{ $choice->video_id }}">
                                {{ $choice->video_name }}<br>
                                <small>Picked by: {{ $choice->creator_name }}</small>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $(window).on('load', function () {
            PlaylistModule.initPlayView();
        });
        var playlistDB = [{!! '"'.implode('","', $playlist->music_choices->pluck('video_id')->unique()->all()). '"' !!}];
//        Collections.shuffle(Arrays.asList(playlistDB));
    </script>
@stop

