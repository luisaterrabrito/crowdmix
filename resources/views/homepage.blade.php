@extends ('layouts.layout')
@section('content')
    <!-- HOME -->
    <section id="home" class="padbot0">
        <div id="backgroundImage">
            <div id="titleContainer">
                <ul class="text-center">
                    <li><h2>Choose your Mix</h2></li>
                    @foreach($playlists as $playlist)
                        <li>
                            <h3>
                                {{ $playlist->name }}
                                @if($playlist->is_playable)
                                    <a href="{{ route('playlist.play',['id'=>1]) }}"><i class="fa fa-play"></i></a>
                                @endif
                                <a href="{{ route('playlist.add',['id'=>1]) }}"><i class="fa fa-pencil"></i></a>
                            </h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section><!-- //HOME -->

@stop