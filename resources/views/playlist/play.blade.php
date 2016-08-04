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
                <iframe id="ytplayer" type="text/html" width="640" height="390"
                        src="{{ $playlist->music_choices->first()->link_url }}"
                        frameborder="0"></iframe>
                <div class="text-center">
                    <h4>{{ $playlist->music_choices->first()->video_name }}
                        - {{ $playlist->music_choices->first()->creator_name }}</h4>
                </div>
                <form>
                    <div class="row ">
                        <div class="col-md-2 text-center">
                            Your name
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="form-group">
                                <input type="email" class="form-control" id="name" name="name"
                                       placeholder="Your name" required>
                            </div>
                        </div>
                    </div>
                    <div id="music_container">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                Add Music
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <input type="email" class="form-control " id="name" name="name"
                                           placeholder="Search or insert link" required>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <span class="form-control-static">VIDEO NAME</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn ">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <span class="list-group-item">
                        Music list
                    </span>
                    @foreach($playlist->music_choices as $choice)
                        <button class="list-group-item music" link="{{ $choice->link_url }}">
                            {{ $choice->video_name }} - {{ $choice->creator_name }}
                        </button>
                    @endforeach
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
    </script>
@stop

