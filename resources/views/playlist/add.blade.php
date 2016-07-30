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
                            <input type="email" class="form-control" id="name" name="name" placeholder="Your name" required>
                        </div>
                    </div>
                </div>
                @for($i = 1;$i<=10;$i++)
                    <div id="music_container">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                Música #{{ sprintf("%02d",$i) }}
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <input type="email" class="form-control " id="name" name="name" placeholder="Search or insert link" required>
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
        $(window).load(function () {
            PlaylistModule.initAddView();
        });
    </script>
@stop
