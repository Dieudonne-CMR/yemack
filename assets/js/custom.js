(function ($) {
    "use strict";
    $(".mean-menu").meanmenu({ meanScreenWidth: "991" });
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 120) {
            $(".navbar-area").addClass("is-sticky");
        } else {
            $(".navbar-area").removeClass("is-sticky");
        }
    });
    $(".language-option").each(function () {
        var each = $(this);
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children("a");
        each.find(".language-dropdown-menu").on("click", "a", function () {
            allOptions.removeClass("selected");
            $(this).addClass("selected");
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    });
    $(".testimonials-slider").owlCarousel({ loop: true, margin: 30, nav: false, dots: true, items: 1, autoplay: true, autoHeight: true, autoplayHoverPause: true, mouseDrag: false, touchDrag: false });
    $(".banner-slider").owlCarousel({ loop: true, margin: 0, autoHeight: true, nav: false, items: 1, dots: true, center: true, autoplay: true, autoplayHoverPause: true });
    $(".choose-slider").owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
        responsive: { 0: { items: 2 }, 768: { items: 3, center: false }, 1000: { items: 4 } },
    });
    $(".service-preview-slider").owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: true,
        nav: true,
        items: 1,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
    });
    $(".recipe-slider").owlCarousel({ loop: true, margin: 30, autoHeight: true, nav: false, dots: true, autoplay: true, autoplayHoverPause: true, responsive: { 0: { items: 1 }, 768: { items: 2 }, 1000: { items: 3 }, 1200: { items: 4 } } });
    $(".gallery-slider").owlCarousel({ loop: true, margin: 25, autoHeight: true, nav: false, dots: false, autoplay: true, autoplayHoverPause: true, responsive: { 0: { items: 2 }, 768: { items: 3, center: false }, 1000: { items: 5 } } });
    $(".gallery-view").magnificPopup({ delegate: "a", type: "image", tLoading: "Loading image #%curr%...", mainClass: "mfp-img-mobile", gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1] } });
    $(".play-btn").magnificPopup({ disableOn: 0, type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: false, fixedContentPos: false });
    $(".btn-play").magnificPopup({ disableOn: 0, type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: false, fixedContentPos: false });
    $("#datetimepicker").datepicker();
    $(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
    $(".tab ul.tabs li").on("click", function (g) {
        var tab = $(this).closest(".tab"),
            index = $(this).closest("li").index();
        tab.find("ul.tabs > li").removeClass("current");
        $(this).closest("li").addClass("current");
        tab.find(".tab_content")
            .find("div.tabs_item")
            .not("div.tabs_item:eq(" + index + ")")
            .slideUp();
        tab.find(".tab_content")
            .find("div.tabs_item:eq(" + index + ")")
            .slideDown();
        g.preventDefault();
    });
    $(".accordion")
        .find(".accordion-title")
        .on("click", function () {
            $(this).toggleClass("active");
            $(this).next().slideToggle("fast");
            $(".accordion-content").not($(this).next()).slideUp("fast");
            $(".accordion-title").not($(this)).removeClass("active");
        });
    $(".input-counter").each(function () {
        var spinner = jQuery(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find(".plus-btn"),
            btnDown = spinner.find(".minus-btn"),
            min = input.attr("min"),
            max = input.attr("max");
        btnUp.on("click", function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
        btnDown.on("click", function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });
    function makeTimer() {
        var endTime = new Date("October 30, 2022 17:00:00 PDT");
        var endTime = Date.parse(endTime) / 1000;
        var now = new Date();
        var now = Date.parse(now) / 1000;
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - days * 86400) / 3600);
        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        var seconds = Math.floor(timeLeft - days * 86400 - hours * 3600 - minutes * 60);
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function () {
        makeTimer();
    }, 300);
    $(".newsletter-form")
        .validator()
        .on("submit", function (event) {
            if (event.isDefaultPrevented()) {
                formErrorSub();
                submitMSGSub(false, "Please enter your email correctly");
            } else {
                event.preventDefault();
            }
        });
    function callbackFunction(resp) {
        if (resp.result === "success") {
            formSuccessSub();
        } else {
            formErrorSub();
        }
    }
    function formSuccessSub() {
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function () {
            $("#validator-newsletter").addClass("hide");
        }, 4000);
    }
    function formErrorSub() {
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function () {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000);
    }
    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    $(".newsletter-form").ajaxChimp({ url: "https://platform.yemak-wellness.com", callback: callbackFunction });
    $("body").append("<div class='go-top'><i class='bx bx-chevrons-up'></i></div>");
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $(".go-top").addClass("active");
        if (scrolled < 600) $(".go-top").removeClass("active");
    });
    $(".go-top").on("click", function () {
        $("html, body").animate({ scrollTop: "0" }, 500);
    });
    $(window).on("load", function () {
        $(".preloader").fadeOut(500);
    });
    new WOW().init();
    $("body").append(
        // "<a href='register' class='buy-now-btn'>je m'inscris</a>"
    );
    $("body").append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
})($);
function setTheme(themeName) {
    localStorage.setItem("arrola_theme", themeName);
    document.documentElement.className = themeName;
}
function toggleTheme() {
    if (localStorage.getItem("arrola_theme") === "theme-dark") {
        setTheme("theme-light");
    } else {
        setTheme("theme-dark");
    }
}
(function () {
    if (localStorage.getItem("arrola_theme") === "theme-dark") {
        setTheme("theme-dark");
        document.getElementById("slider").checked = false;
    } else {
        setTheme("theme-light");
        document.getElementById("slider").checked = true;
    }
})();
