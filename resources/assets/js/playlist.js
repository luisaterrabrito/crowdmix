/**
 * Created by Henrique Ferreira on 30/07/2016.
 */

var PlaylistModule = (function () {
    return {
        initAddView: function () {
            console.log("PlaylistModule add init.");
            $('input[data-handler="youtube_query"]').on("change", function () {
                console.log("change:" + $(this).val());
                $.ajax({
                    type: 'GET',
                    url: youtubeQueryRoute,
                    data: {
                        query: $(this).val()
                    }
                }).done(function (data) {
                    data.data.forEach(function(item){
                        console.log(item.snippet);
                    });
                });
            });
        }
    }
})();