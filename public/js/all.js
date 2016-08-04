/**
 * Created by Henrique Ferreira on 30/07/2016.
 */

var PlaylistModule = (function () {
    return {
        initAddView: function () {
            console.log("LicensesModules results init.");

        },
        initPlayView: function () {
            $(".music").on('click', function(){
                console.log($(this));
                var musicLink = $(this).attr("link");
                $("#ytplayer").attr("src", musicLink);
            });
        }
    }
})();


var fixed_menu = true;

//# sourceMappingURL=all.js.map
