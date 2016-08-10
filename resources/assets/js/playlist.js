var PlaylistModule = (function () {
    return {
        initAddView: function () {
            console.log("LicensesModules results init.");

        },
        initPlayView: function () {
            var player;

            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '460',
                    width: '768',
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    },
                    iv_load_policy: 3
                });
            }

            function onPlayerReady(event) {
                event.target.playVideo();
                player.loadPlaylist({
                    'playlist': playlistDB,
                    'listType': 'playlist',
                    'index': 0
                });
            }

            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.ENDED) {
                    event.target.playVideo();
                }
                else if (event.data == YT.PlayerState.BUFFERING) {
                    refreshStatus();
                    checkIfInView();
                }
            }

            function addActiveClass() {
                $(".music:first").addClass("active");
            };

            $(".music").on('click', function () {
                player.loadVideoById($(this).attr("data-video-id"));
                refreshStatus();
            });
            function refreshStatus() {
                $(".music").removeClass("active");
                $(".music[data-video-id='"+player.getVideoData()["video_id"]+"']").addClass("active");
                checkIfInView();
            }

            $(".music.active").mCustomScrollbar();

            function checkIfInView(){
                var music = $(".music.active");
                $('.mCustomScrollbar').mCustomScrollbar("scrollTo", music);
            }
            onYouTubeIframeAPIReady();
            addActiveClass();
        }
    }
})();

