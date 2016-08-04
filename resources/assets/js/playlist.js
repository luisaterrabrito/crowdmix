/**
 * Created by Henrique Ferreira on 30/07/2016.
 */

var PlaylistModule = (function () {
    return {
        initAddView: function () {
            console.log("LicensesModules results init.");

        },
        initPlayView: function () {
           var refresh = function(){
               console.log("Refresh!!!");
            $(".music").each(function () {
                if($(this).attr("link") == $("#ytplayer").attr("src")){
                    $(this).addClass("active");
                }
            });
           };
            $(".music").on('click', function(){
                var musicLink = $(this).attr("link");
                $("#ytplayer").attr("src", musicLink);
                refresh();
            });
            refresh();
        }
    }
})();

