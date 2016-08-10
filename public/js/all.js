/**
 * Created by Henrique Ferreira on 30/07/2016.
 */

var PlaylistModule = (function () {
    return {
        initAddView: function () {

            console.log("PlaylistModule add init.");
            var videos = [];
            $('body').on('click', function () {
                $('.search-results').addClass('hidden');
            });
            $('#add_form').on('submit', function () {
                    if ($('input[data-type="video_info"][value=""]').length > 0) {
                        alert('Please fill all the music choices');
                        return false;
                    }
                }
            );
            stop_propgation = function () {
                if (event.stopPropagation) {
                    event.stopPropagation();   // W3C model
                } else {
                    event.cancelBubble = true; // IE model
                }
            };
            select_video = function () {
                var video_id = $(event.srcElement).closest('a').data('video-id');
                var row_id = $(event.srcElement).closest('a').data('id');
                var display_span = $('.video-label[data-id="' + row_id + '"]');
                var input = $('input#name[data-id="' + row_id + '"]');
                var item = videos[video_id];
                console.log($('#videos[' + row_id + '][name]'), $('#videos[' + row_id + '][video_code]'), $('#videos[' + row_id + '][video_url]'));
                $('#videos_' + row_id + '_name').val(item.snippet.title);
                $('#videos_' + row_id + '_video_code').val(item.id);
                $('#videos_' + row_id + '_video_url').val(item.snippet.title);
                input.val('');
                input.removeAttr('required');
                input.attr('disabled', 'true');
                display_span.empty();

                var template = '<li class="list-group-item" style="display: block;">' +
                    '<div class="col-xs-12 col-sm-3">' +
                    '<img src="' + item.snippet.thumbnails.default.url + '" class="img-responsive">' +
                    '</div>' +
                    '<div class="col-xs-12 col-sm-9">' +
                    '<span class="video_name"><strong>' + item.snippet.title + '</strong></span><br>' +
                    '</div>' +
                    '<div class="top-icon"><a href="#" onclick="deleteEntry()" data-id="' + row_id + '"><i class="fa fa-times"></i> </a> </div>' +
                    '<div class="clearfix"></div>' +
                    '</li>';
                display_span.append(template);
            };
            play_video = function () {
                var video_id = $(event.srcElement).closest('a').data('video-id');
                console.log("Play video function: " + video_id + " , " + player);
                function onYouTubeIframeAPIReady() {
                    player = new YT.Player('player', {
                        height: '300',
                        width: '400',
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                }

                function onPlayerReady(event) {
                    // console.log(player);
                    player.loadVideoById(video_id);
                    // event.target.playVideo();
                }

                function onPlayerStateChange(event) {
                    // console.log(event.data);
                }

                if (player !== undefined) {
                    player.loadVideoById(video_id);
                }
                else
                    onYouTubeIframeAPIReady();

            };
            deleteEntry = function () {
                var row_id = $(event.srcElement).closest('a').data('id');
                var display_span = $('.video-label[data-id="' + row_id + '"]');
                display_span.empty();
                var input = $('input#name[data-id="' + row_id + '"]');
                input.removeAttr('disabled');
                input.attr('required', 'true');
                console.log("delete " + row_id);
                $('#videos_' + row_id + '_name').val("");
                $('#videos_' + row_id + '_video_code').val("");
                $('#videos_' + row_id + '_video_url').val("");
            };
            var timer, delay = 500;
            $('input[data-handler="youtube_query"]').on('keydown blur change', function (e) {
                var _this = $(this);
                clearTimeout(timer);
                timer = setTimeout(function () {

                    if (_this.val().length > 3) {
                        var id = _this.data('id');
                        console.log('searching for: ' + _this.val());
                        $.ajax({
                            type: 'GET',
                            url: youtubeQueryRoute,
                            data: {
                                query: _this.val()
                            }
                        }).done(function (data) {
                            var ul = $('.search-results[data-id="' + id + '"]');
                            ul.addClass('hidden');
                            ul.empty();
                            data.data.forEach(function (item) {
                                // videos.clear();
                                videos[item.id] = item;
                                // console.log(item);
                                var template = '<li class="list-group-item" style="display: block;">' +
                                    '<div class="col-xs-12 col-sm-3">' +
                                    '<img src="' + item.snippet.thumbnails.default.url + '" class="img-responsive">' +
                                    '</div>' +
                                    '<div class="col-xs-12 col-sm-9">' +
                                    '<span class="video_name"><strong>' + item.snippet.title + '</strong></span><br>' +
                                    '<span class="video_duration">' + item.contentDetails.duration.replace('PT', '').replace('M', ':').replace('H', ':').replace('S', '') + '</span><br>' +
                                    '<span class="actions">' +
                                    '<a href="#" onclick="play_video()" data-id="' + id + '" data-video-id="' + item.id + '"><i class="fa fa-play"></i> Play</a>' +
                                    '<a href="#" onclick="select_video()" data-id="' + id + '" data-video-id="' + item.id + '"><i class="fa fa-check"></i> Select</a>' +
                                    '</span>' +
                                    '<br>' +
                                    '</div>' +
                                    '<div class="clearfix"></div>' +
                                    '</li>';
                                ul.append(template);
                            });
                            // console.log(videos);
                            ul.removeClass('hidden');
                        });
                    }

                }, delay);
            });
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
                $(".music[data-video-id='" + player.getVideoData()["video_id"] + "']").addClass("active");
                checkIfInView();
            }

            $(".music.active").mCustomScrollbar();

            function checkIfInView() {
                var music = $(".music.active");
                $('.mCustomScrollbar').mCustomScrollbar("scrollTo", music);
            }

            onYouTubeIframeAPIReady();
            addActiveClass();
        }
    }
})
();
//# sourceMappingURL=all.js.map
