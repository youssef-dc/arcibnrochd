/*------------------------------------------------------------------
 [Table of contents]

 1. Video
 2. Youtube
 3.  Add .html file on page
 4. Menu-Bar
 5. Counter
 6. Homepage Carousel
 7. Owl Carousel

 -------------------------------------------------------------------*/

"use strict";

// ======================= Video =============================
var iframeVideo = document.getElementById("iframeVideo");
if (iframeVideo) {
    document.querySelector(".video-overlay").onclick = function () {
        this.style.display = "none";
        iframeVideo.setAttribute('src',
            'https://player.vimeo.com/video/10260175?title=0&byline=0&portrait=0?rel=0&autoplay=1');
    };
}

// ====================== Youtube ============================
var iframeYoutube = document.getElementById("iframeYoutube");
if (iframeYoutube) {
    document.querySelector(".youtube-overlay").onclick = function () {
        this.style.display = "none";
        iframeYoutube.setAttribute('src',
            'https://www.youtube.com/embed/IM-yYn6i_58?rel=0&autoplay=1');
    };
}

$(function() {

    // ================ Add .html file on page =================
    $.get("header_page.html", function(data){
        $('#header').append(data);
    });
    $.get("header_page-ecology.html", function(data){
        $('#header-ecology').append(data);
    });
    $.get("menu-bar-charity.html", function(data){
        $('#menuBar-charity').append(data);
    });
    $.get("menu-bar-ecology.html", function(data){
        $('#menuBar-ecology').append(data);
    });
    $.get("sidebar.html", function(data){
        $('#sidebar').append(data);
    });
    $.get("sidebar-ecology.html", function(data){
        $('#sidebar-ecology').append(data);
    });
    $.get("footer.html", function(data){
        $('#footer').append(data);
    });
    $.get("footer-ecology.html", function(data){
        $('#footer-ecology').append(data);
    });

    // ===================== Menu-Bar ======================
    $(document).on('click','button.navbar-toggle', function(){
        if($(".slider-info")) {
            $(".slider-info").each(function () {
                $(this).toggleClass("displayNone");
            });
            $(".slider").toggleClass("shadowButton");
        }
        if($(".banner h1")) {
            $(".banner h1").toggleClass("displayNone");
            $(".banner ul").toggleClass("displayNone");
            $(".banner").toggleClass("shadowButton");
        }
        if($(".page-404")) {
            $(".page-404 .menuBar").css("background","rgb(06, 06, 06)");
        }
        if($(".page-single")) {
            $(".page-single .menuBar").css("background","rgb(06, 06, 06)");
        }
    });

    $(document).on('mouseover',"li.dropdown", function(){
        $(this).addClass("open");
    }).on('mouseout',"li.dropdown", function(){
        $(this).removeClass("open");
    });

    // ===================== Counter ======================
    var countbox = $("#counts");
    if (countbox.length>0) {
        var show = true;
        $(window).on("scroll load resize", function () {

            if (!show) return false;

            var w_top = $(window).scrollTop();
            var e_top = countbox.offset().top;
            var w_height = $(window).height();
            var d_height = $(document).height();
            var e_height = countbox.outerHeight();

            if (w_top + 900 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                $(".spincrement").spincrement({
                    thousandSeparator: "",
                    duration: 3000
                });
                show = false;
            }
        });
    }

    // =================== Homepage Carousel ====================
    var slider=$('.slider');
    if(slider.length>0) {
        $("#home-carousel .slider-info h4").addClass('animated fadeInDown');
        $("#home-carousel .slider-info h2").addClass('animated fadeInDown');
        $("#home-carousel .slider-info .buttons").addClass('animated fadeInDown');
    }
    $('#home-carousel').carousel(
        {
            interval: 7000
        }
    );

    // ===================== Owl Carousel ====================
    var owl = $('.owl-carousel');
    if (owl.length>0) {
        owl.owlCarousel({
            autoplayHoverPause: true,
            autoplayTimeout: 4000,
            autoplay: true,
            loop: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                700: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }

});

//script pour soumission
$("#titre").keypress(function(){
        var num_words = $(this).val().trim().split(/\s+/).length;  
        if (num_words > 10) {
            $(this).closest('.form-group').find('.error').html('10 mots maximum ! <br/>');       
            $(this).text($(this).val().split(/\s+/).slice(0,9).join(" "));
        }else{
            $(this).closest('.form-group').find('.error').html('');
        }
        
    });
$("#texte").keypress(function(){
        var num_words = $(this).val().trim().split(/\s+/).length;  
        if (num_words > 300) {
            $(this).closest('.form-group').find('.error').html('300 mots maximum ! <br/>');       
            $(this).text($(this).val().split(/\s+/).slice(0,299).join(" "));
        }else{
            $(this).closest('.form-group').find('.error').html('');
        }
        
    });



//modal script 
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("preview");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    $("#preview-titre").html('Titre : ' + $("#titre").val());
    $("#preview-auteurs").html('Auteurs : ' + $("#auteurs").val());
    $("#preview-services-etablissements").html('Service et établissement : ' + $("#services").val()+' - '+$("#etablissements").val());
    $("#preview-texte").html('Titre : <br/>' + $("#texte").val());
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
