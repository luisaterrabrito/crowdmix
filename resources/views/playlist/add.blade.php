@extends ('layouts.layout')
@section('content')
    <div class="row">
        <br>
        <div class="col-xs-12">
            <h1 class="text-center">{{ $playlist->name }}</h1>
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <form>
                <div class="row ">
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
                                Música #{{ sprintf("%02d",$i) }}
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="form-group no-margin-bottom">
                                        <input type="text" class="form-control no-margin-bottom " id="name" name="name"
                                               placeholder="Search or insert link" required data-handler="youtube_query">
                                    </div>
                                    <ul class="list-group" id="search-results-list">
                                        <li class="list-group-item" style="display: block;">
                                            <div class="col-xs-12 col-sm-3">
                                                <img src="http://api.randomuser.me/portraits/men/49.jpg"
                                                     alt="Scott Stevens" class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <span class="video_name"><strong>Scott Stevens</strong></span><br>
                                                <span class="video_duration">Scott Stevens</span><br>
                                                <span class="actions">
                                                    <a href="#"><i class="fa fa-play"></i> Play</a>
                                                    <a href="#"><i class="fa fa-check"></i> Select</a>
                                                </span>
                                                <br>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <span class="form-control-static">NOME VIDEO</span>
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
@stop

@section('scripts')
    <script type="text/javascript">
        var youtubeQueryRoute = "{{ route('youtube.query') }}";
        $(window).on('load', function () {
            PlaylistModule.initAddView();
        });
    </script>
@stop
