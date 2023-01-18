;
(function ($) {
  "use strict";

  $(document).ready(function () {

    /**-----------------------------
     *  Navbar fix
     * ---------------------------*/
    // $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {
    //   e.preventDefault();
    // })


    /*--------------------
           wow js init
       ---------------------*/
    new WOW().init();

    /* menu-toggle */

    var menutoggle = $('.menu-toggle');
    var mainmenu = $('.navbar-nav');

    menutoggle.on('click', function () {
      if (menutoggle.hasClass('is-active')) {
        mainmenu.removeClass('menu-open');
      } else {
        mainmenu.addClass('menu-open');
      }
    });


    //Scroll Down
    $('.scroll-style-01 a').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500, 'linear');
    });

    //Scroll Down
    $('.scroll-style-02 a').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500, 'linear');
    });

    /*-------------------------------------
           Massonry isotop
       -------------------------------------*/
    $(document).ready(function () {

      $('.grid').isotope({
        itemSelector: '.grid-item',
      });

      // filter items on button click
      $('.portfolio-menu').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        $('.grid').isotope({
          filter: filterValue
        });
        $('.portfolio-menu li').removeClass('active');
        $(this).addClass('active');
      });
    })

    /*-------------------------------
        Portfolio filter 
    ---------------------------------*/
    var $Container = $('.portfolio-masonry');
    if ($Container.length > 0) {
      $('.portfolio-masonry').imagesLoaded(function () {
        var festivarMasonry = $Container.isotope({
          itemSelector: '.masonry-item', // use a separate class for itemSelector, other than .col-
          masonry: {
            gutter: 0
          }
        });
        $(document).on('click', '.portfolio-menu li', function () {
          var filterValue = $(this).attr('data-filter');
          festivarMasonry.isotope({
            filter: filterValue
          });
        });
      });
      $(document).on('click', '.portfolio-menu li', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
      });
    }

    /*------------------
           back to top
       ------------------*/
    $(document).on('click', '.back-to-top', function () {
      $("html,body").animate({
        scrollTop: 0
      }, 2000);
    });


  });

  var lastScrollTop = "";
  $(window).on("scroll", function () {
    /*---------------------------------------
    sticky menu activation && Sticky Icon Bar
    -----------------------------------------*/
    var st = $(this).scrollTop();
    var mainMenuTop = $(".navbar-area");
    if ($(window).scrollTop() >= 1) {
      mainMenuTop.addClass('navbar-area-fixed');
    } else {
      mainMenuTop.removeClass('navbar-area-fixed');
    }


    lastScrollTop = st;

    var ScrollTop = $('.back-to-top');
    if ($(window).scrollTop() > 1000) {
      ScrollTop.fadeIn(1000);
    } else {
      ScrollTop.fadeOut(1000);
    }
  });


  $(window).on('load', function () {

    /*-----------------
        preloader
    ------------------*/
    var preLoder = $("#preloader");
    preLoder.fadeOut(0);

    /*-----------------
        back to top
    ------------------*/
    var backtoTop = $('.back-to-top')
    backtoTop.fadeOut();

    /*---------------------
        Cancel Preloader
    ----------------------*/
    $(document).on('click', '.cancel-preloader a', function (e) {
      e.preventDefault();
      $("#preloader").fadeOut(2000);
    });

  });

  $('.navbar-nav li:has(ul)').addClass('menu-item-has-children');
  $('.menu-item-has-children ul').addClass('sub-menu');
  $('.sub-menu a').prepend('<i class="fa fa-long-arrow-right"></i>');
  $('.footer-useful-links li a').prepend('<i class="fa fa-long-arrow-right"></i>');

  // categories count start
  $('.cat-menu li .badge').each(function (index) {
    var badge = $(this).text();
    $(this).prev('.cat-menu li a').append(`<span class="text-right">(${badge})</span>`);
    $(this).remove();
  });
  // categories count end

  // events start

  $('.next-event, .next-event-home').not(':eq(0)').remove();
  $('.next-event-home-secondary').first().remove();

  $('.events-js').slick({
    infinite: true,
    slidesToShow: 2,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
        breakpoint: 1200,
        settings: {
          arrows: false
        }
      },
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          slidesToShow: 1
        }
      },
    ]
  });
  // events end

  // team start

  $(document).ready(function () {
    $('.tabs circle, .mobile_tabs li').click(function () {
      var tab_id = $(this).attr('data-tab');
      $('.tabs circle, .mobile_tabs li').removeClass('current');
      $('.tab-content').removeClass('current');

      $(this).addClass('current');
      $("#" + tab_id).addClass('current');
    })
  })



  var ajdarken = $('.hidden-list-team .ajdarken .city_status').text();
  var balykchy = $('.hidden-list-team .balykchy .city_status').text();
  var batken = $('.hidden-list-team .batken .city_status').text();
  var bishkek = $('.hidden-list-team .bishkek .city_status').text();
  var dzhalalAbad = $('.hidden-list-team .dzhalal-abad .city_status').text();
  var isfana = $('.hidden-list-team .isfana .city_status').text();
  var kadamzhaj = $('.hidden-list-team .kadamzhaj .city_status').text();
  var kaindy = $('.hidden-list-team .kaindy .city_status').text();
  var kant = $('.hidden-list-team .kant .city_status').text();
  var karaBalta = $('.hidden-list-team .kara-balta .city_status').text();
  var karakol = $('.hidden-list-team .karakol .city_status').text();
  var karaKul = $('.hidden-list-team .kara-kul .city_status').text();
  var karaSuu = $('.hidden-list-team .kara-suu .city_status').text();
  var kemin = $('.hidden-list-team .kemin .city_status').text();
  var kerben = $('.hidden-list-team .kerben .city_status').text();
  var kokDzhangak = $('.hidden-list-team .kok-dzhangak .city_status').text();
  var kochkorAta = $('.hidden-list-team .kochkor-ata .city_status').text();
  var kyzylKiya = $('.hidden-list-team .kyzyl-kiya .city_status').text();
  var majluuSuu = $('.hidden-list-team .majluu-suu .city_status').text();
  var naryn = $('.hidden-list-team .naryn .city_status').text();
  var nookat = $('.hidden-list-team .nookat .city_status').text();
  var orlovka = $('.hidden-list-team .orlovka .city_status').text();
  var osh = $('.hidden-list-team .osh .city_status').text();
  var sulyukta = $('.hidden-list-team .sulyukta .city_status').text();
  var talas = $('.hidden-list-team .talas .city_status').text();
  var tashKumyr = $('.hidden-list-team .tash-kumyr .city_status').text();
  var tokmok = $('.hidden-list-team .tokmok .city_status').text();
  var toktogul = $('.hidden-list-team .toktogul .city_status').text();
  var uzgen = $('.hidden-list-team .uzgen .city_status').text();
  var cholponAta = $('.hidden-list-team .cholpon-ata .city_status').text();
  var shopokov = $('.hidden-list-team .shopokov .city_status').text();

  $('.hidden-list-team .ajdarken').clone().appendTo('#ajdarken .row');
  $('.hidden-list-team .balykchy').clone().appendTo('#balykchy .row');
  $('.hidden-list-team .batken').clone().appendTo('#batken .row');
  $('.hidden-list-team .bishkek').clone().appendTo('#bishkek .row');
  $('.hidden-list-team .dzhalal-abad').clone().appendTo('#dzhalal-abad .row');
  $('.hidden-list-team .isfana').clone().appendTo('#isfana .row');
  $('.hidden-list-team .kadamzhaj').clone().appendTo('#kadamzhaj .row');
  $('.hidden-list-team .kaindy').clone().appendTo('#kaindy .row');
  $('.hidden-list-team .kant').clone().appendTo('#kant .row');
  $('.hidden-list-team .kara-balta').clone().appendTo('#kara-balta .row');
  $('.hidden-list-team .karakol').clone().appendTo('#karakol .row');
  $('.hidden-list-team .kara-kul').clone().appendTo('#kara-kul .row');
  $('.hidden-list-team .kara-suu').clone().appendTo('#kara-suu .row');
  $('.hidden-list-team .kemin').clone().appendTo('#kemin .row');
  $('.hidden-list-team .kerben').clone().appendTo('#kerben .row');
  $('.hidden-list-team .kok-dzhangak').clone().appendTo('#kok-dzhangak .row');
  $('.hidden-list-team .kochkor-ata').clone().appendTo('#kochkor-ata .row');
  $('.hidden-list-team .kyzyl-kiya').clone().appendTo('#kyzyl-kiya .row');
  $('.hidden-list-team .majluu-suu').clone().appendTo('#majluu-suu .row');
  $('.hidden-list-team .naryn').clone().appendTo('#naryn .row');
  $('.hidden-list-team .nookat').clone().appendTo('#nookat .row');
  $('.hidden-list-team .orlovka').clone().appendTo('#orlovka .row');
  $('.hidden-list-team .osh').clone().appendTo('#osh .row');
  $('.hidden-list-team .sulyukta').clone().appendTo('#sulyukta .row');
  $('.hidden-list-team .talas').clone().appendTo('#talas .row');
  $('.hidden-list-team .tash-kumyr').clone().appendTo('#tash-kumyr .row');
  $('.hidden-list-team .tokmok').clone().appendTo('#tokmok .row');
  $('.hidden-list-team .toktogul').clone().appendTo('#toktogul .row');
  $('.hidden-list-team .uzgen').clone().appendTo('#uzgen .row');
  $('.hidden-list-team .cholpon-ata').clone().appendTo('#cholpon-ata .row');
  $('.hidden-list-team .shopokov').clone().appendTo('#shopokov .row');

  $('.city.ajdarken').addClass(ajdarken);
  $('.city.balykchy').addClass(balykchy);
  $('.city.batken').addClass(batken);
  $('.city.bishkek').addClass(bishkek);
  $('.city.dzhalal-abad').addClass(dzhalalAbad);
  $('.city.isfana').addClass(isfana);
  $('.city.kadamzhaj').addClass(kadamzhaj);
  $('.city.kaindy').addClass(kaindy);
  $('.city.kant').addClass(kant);
  $('.city.kara-balta').addClass(karaBalta);
  $('.city.karakol').addClass(karakol);
  $('.city.kara-kul').addClass(karaKul);
  $('.city.kara-suu').addClass(karaSuu);
  $('.city.kemin').addClass(kemin);
  $('.city.kerben').addClass(kerben);
  $('.city.kok-dzhangak').addClass(kokDzhangak);
  $('.city.kochkor-ata').addClass(kochkorAta);
  $('.city.kyzyl-kiya').addClass(kyzylKiya);
  $('.city.majluu-suu').addClass(majluuSuu);
  $('.city.naryn').addClass(naryn);
  $('.city.nookat').addClass(nookat);
  $('.city.orlovka').addClass(orlovka);
  $('.city.osh').addClass(osh);
  $('.city.sulyukta').addClass(sulyukta);
  $('.city.talas').addClass(talas);
  $('.city.tash-kumyr').addClass(tashKumyr);
  $('.city.tokmok').addClass(tokmok);
  $('.city.toktogul').addClass(toktogul);
  $('.city.uzgen').addClass(uzgen);
  $('.city.cholpon-ata').addClass(cholponAta);
  $('.city.shopokov').addClass(shopokov);



  $('.hidden-list-team').remove();
  $('.tab_upload_item .city_status').remove();

  // team end




  // // instgram feeds start 


  // (function () {
  //   new InstagramFeed({
  //     'username': 'tabylga_kg',
  //     'container': document.getElementById("instagram-feed1"),
  //     'display_profile': false,
  //     'display_biography': false,
  //     'display_gallery': true,
  //     'display_captions': false,
  //     'max_tries': 9,
  //     'callback': null,
  //     'styling': true,
  //     'items': 9,
  //     'items_per_row': 3,
  //     'margin': 1,
  //     'lazy_load': true,
  //     'on_error': console.error
  //   });
  // })();


  // // instgram feeds end 


})(jQuery);