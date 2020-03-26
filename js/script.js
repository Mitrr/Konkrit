$(function () {
    document_ready();
    window_onload();
});

function document_ready() {
    ts = (new Date()).getTime();
    $("body").addClass("ready");

    var os = navigator.platform.toLowerCase();
    if (os.indexOf("mac") != -1) {
        $("body").addClass("mac");
    }

    //responsive_init();
    init_event_handlers();

    bind_widgets();
    $(document).ajaxStop(function () {
        bind_widgets();
    });

    //scroll_animations_init();

    te = (new Date()).getTime();
    console.log("On-Ready Load Time: ", te - ts);
}

function window_onload() {
    ts = (new Date()).getTime();
    $("body").addClass("win-loaded").removeClass("win-not-loaded");
    /*$(document).imagesLoaded(function () {
        te = (new Date()).getTime();
        console.log("Images Load Time: ", te - ts);
        setTimeout(function () {
            $("body").addClass("loaded").removeClass("not-loaded");
        }, 10);
    });*/

    //responsive_update();
    //lazy_load();

    te = (new Date()).getTime();
    console.log("Window Load Time: ", te - ts);
}

$(window).scroll(function () {
    if (typeof $("body").data("scrollval") === "undefined") $("body").data("scrollval", 0);

    //scroll_animations();
    //lazy_load();
    $("body").data("scrollval", $(window).scrollTop());
});

function init_event_handlers() {
    //fix_touch_hovers();
    //click_touch_init();

    ajaxHandlersInit();

    $(".animated").appear();
    $(document).on('appear',".animated", function(event, $all_appeared_elements) {
        var elem = $(this);

        var animation = elem.data('animation');

        if (!elem.hasClass('visible')) {
            var animationDelay = elem.data('animation-delay');
            if (animationDelay) {
                setTimeout(function () {
                    elem.addClass(animation + " visible");
                }, animationDelay);
            } else {
                elem.addClass(animation + " visible");
            }
        }
    });


    $(document).on("touchstart",".touchevents a",function () {
        $(this).addClass("touched");
    });

    $(document).on("touchend",".touchevents a",function () {
        $(this).removeClass("touched");
    });


    $(window).scroll(function () {
        var scroll_top = parseInt($(this).scrollTop());
        if (scroll_top > 0) {
            $(".header").addClass("fixed").addClass("active");
        }
        else {
            $(".header").removeClass("fixed").removeClass("active");
        }
    });

    $(document).on("click",".page-link",function (e) {
        var link = "#"+$(this).data("link");
        var top = $(link).offset().top - 150;

        $("body,html").animate({"scrollTop":top},"slow");

    });

    $(document).on("click","#hamburger",function (e) {
        if ($(this).hasClass("is-open")) {
            $(this)
                .removeClass('is-open')
                .addClass('is-closed');

            $(".header nav").removeClass("active");
        } else {
            $(this)
                .removeClass('is-closed')
                .addClass('is-open');
            $(".header nav").addClass("active");
        }
    });


}

$(window).on("resize orientationchange", function (e) {
    //responsive_update();
    //scroll_animations();
});

function bind_widgets() {
    img_to_bg();
    slider_init();
    fancybox_init();
    //gmap_load();
    validate_init();
    mask_init();
    checkbox_plain_init();
    //sliceSlider_init();
    //ui_slider_init();
}

// projects inputs

let updateTextInput = val => document.getElementById(`input-text-${val.className.substr(-1)}`).value=val.value.replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')
let updateRange = val => document.getElementsByClassName(`input-range-${val.id.substr(-1)}`)[0].value=val.value.replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')

// project-home tabs

const allTabs = () => {
    let tabs = document.getElementsByClassName('tab')
    let tabsContent = document.getElementsByClassName('tab-cont')
    for (let [index, tab] of [...tabs].entries()) {
        tab.addEventListener('click', function() {
            for(tab of tabs) {
                tab.classList.remove('active')
            }
            for(tabsCont of tabsContent){
                tabsCont.classList.remove('active')
                tabsContent[index].classList.add('active')
            }
            this.classList.add('active')
        })
    }
}
allTabs();