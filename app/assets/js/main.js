$(document).ready(function() {

  //---------------------------------
  // SP時横スクロール UI
  //---------------------------------

  new ScrollHint('.scroll');

  //---------------------------------
  // Smooth Scrolling
  //---------------------------------

  $('a[href^="#"]').click(function(){

    var the_id = $(this).attr("href");

    $('html, body').animate({
      scrollTop:$(the_id).offset().top-50
    }, 'slow');

    return false;
  });


  //---------------------------------
  // AOS
  //---------------------------------
  AOS.init({
    offset: 120,　//初期値
    delay: 0,　//初期値
    anchor: 'top-bottom', //初期値
    duration: 800,　//初期値　400
    easing: 'ease',　//初期値
    once: true,　//初期値　false
  });

});


//--------------------------------------
//　テキスト　アニメーション
//--------------------------------------

$(window).on('load', function(){
  $('.wave span').each(function(){
    $(this).addClass('up');
  });
});


//--------------------------------------
//　アニメーション　ふわっと演出
//--------------------------------------
window.onload = function() {
  scroll_effect();

  $(window).scroll(function(){
   scroll_effect();
  });

  function scroll_effect(){
   $('.fadein').each(function(){
    var elemPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight){
     $(this).addClass('scrollin');
    }
   });
  }
};


//--------------------------------------
//　アコーディオンメニュー
//--------------------------------------

(function ($) {
  $(function () {
    $('#nav-toggle').on('click', function () {
      $('header').toggleClass('open');
      $('#gloval-nav').slideToggle();
    });
  });
})(jQuery);


//--------------------------------------
//　header　演出
//--------------------------------------

$(function(){
  var pos = 0;
  var header = $('header');
  
  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos || $(this).scrollTop() < 400){
      header.removeClass('hide');
    }else{
      header.addClass('hide');
    }
    pos = $(this).scrollTop();
  });
});


//--------------------------------------
//　バナー　追従
//--------------------------------------

$(function(){
  var scrollStart = $('.show').offset().top;
  var scrollEnd = $('.hide').offset().top;
  var distance = 0;

  $(document).scroll(function(){
    distance = $(this).scrollTop();

    if (scrollStart <= distance) {
      $('.floating').addClass('fixed');
    } else if (scrollStart >= distance) {
      $('.floating').removeClass('fixed');
    }

    if (scrollEnd <= distance) {
      if (window.matchMedia('(min-width:769px)').matches) {
        $('.floating').fadeOut();
      } else {
        $('.floating').fadeIn();
      }
    }
  });      
});


//--------------------------------------
//　マーカー　アニメーション
//--------------------------------------

$(window).scroll(function (){
  $(".marker").each(function(){
    var position = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > position - windowHeight){
      $(this).addClass('active');
    }
  });
});


//--------------------------------------
//　追従バナー　処理
//--------------------------------------

$(function(){
  $("#close").click(function(){
    $('.bnr-fixed').addClass('none');
  });
});


//--------------------------------------
//　下部追従バナー　処理
//--------------------------------------

$(window).on("scroll", function() {
  if (500 < jQuery(this).scrollTop()) {
    $('.bnr-fixed').addClass('show');
  } else {
    $('.bnr-fixed').removeClass('show');
  }
});


//--------------------------------------
//　詳細ページ　サイドバナー追従
//--------------------------------------

$( window ).on( 'scroll', function() {
	if ( 1200 < jQuery( this ).scrollTop() ) {
		jQuery( '.bnrGroup' ).addClass( 'fixed' );
	} else {
		jQuery( '.bnrGroup' ).removeClass( 'fixed' );
	}
});


//--------------------------------------
//　資料　スライダー
//--------------------------------------

$(document).ready(function() {
  $('#wp-slick').slick({
      arrows: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<button class="slide-arrow prev-arrow"></button>',
      nextArrow: '<button class="slide-arrow next-arrow"></button>'
  });
});


//--------------------------------------
//　column　サイドバナー　処理
//--------------------------------------

$(window).on('scroll', function () {
  if (900 < $(this).scrollTop()) {
    $('.sidenav-wrap').addClass('sticky');
  } else {
    $('.sidenav-wrap').removeClass('sticky');
  }
});


