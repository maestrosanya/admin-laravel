
function adminLeftMenu() {

    var menuBox =       $(".admin-menu__box");
    var menuBtn =       $(".admin-menu__btn");
    var parentLink =    $(".admin-menu__parent-link span");
    var subCategory =   $(".admin-menu__sub-category");

    $(".admin-menu__parent-link").addClass("active");


    $(menuBtn).click(function () {

        $(parentLink).toggle( 200,
            function () {
                if ($(parentLink).is(":visible")) {
                    $(".admin-menu__parent-link").addClass("active");
                    $(".admin-menu__box").css({"width": "235px", "transition": "all 0.3s"});
                    $(subCategory).removeClass("active");
                } else {
                    $(".admin-menu__box").css({"width": "45px", "transition": "all 0.5s"});
                    $(".admin-menu__parent-link").removeClass("active");
                    $(subCategory).addClass("active");

                    if ($(".admin-menu__parent-link").hasClass("collapsed")) {
                        $("div .collapse").removeClass("show");
                    } else {
                        //  $("div .collapse").removeClass("show");
                    }
                }
        },);

        /*setTimeout(function () {
            if ($(parentLink).is(":visible")) {
                $(".admin-menu__parent-link").addClass("active");
                $(".admin-menu__box").css({"width": "235px", "transition": "all 0.3s"});
                $(subCategory).removeClass("active");
            } else {
                $(".admin-menu__box").css({"width": "45px", "transition": "all 0.5s"});
                $(".admin-menu__parent-link").removeClass("active");
                $(subCategory).addClass("active");

                if ($(".admin-menu__parent-link").hasClass("collapsed")) {
                    $("div .collapse").removeClass("show");
                } else {
                    //  $("div .collapse").removeClass("show");
                }
            }
        }, 0);*/


    });
}


adminLeftMenu();