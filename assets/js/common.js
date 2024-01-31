$(function() {
  // ページ内リンク start
  $('a[href^="#"]').click(function() {
    var headerHeight = $('.js-header').height();
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  // ページ内リンク end

  $('.scroll').hide();


  if($('.js-header').length){
    //header ロゴ 一番上にある時拡大
    header_logo = $('.js-header_logo');
    $(window).on('load scroll', function(e){
      var pageYOffset = window.pageYOffset;
      if(pageYOffset > 0) {
        header_logo.removeClass('is-top');
      } else {
        header_logo.addClass('is-top');
      }
    })
    var pos;
    $('.js-header_ham').click(function(){
      if($('.js-header').hasClass("is-open")) {
        $('.js-header').removeClass('is-open');
        $('.js-header_list').removeClass('is-open');
        $('.line1').removeClass('active_line1');
        $('.line2').removeClass('active_line2');
        $('.line3').removeClass('active_line3');
        $('body').removeClass('is-fixed').css({'top': 0});;
        window.scrollTo(0, pos);
      } else {
        pos = $(window).scrollTop();
        $('.js-header').addClass('is-open');
        $('.js-header_list').addClass('is-open');
        $('.line1').addClass('active_line1');
        $('.line2').addClass('active_line2');
        $('.line3').addClass('active_line3');
        $('body').addClass('is-fixed').css({'top': 0});
      }
    });
    $(".js-header_parent").mouseover(function(){
      $(this).children(".js-header_child").stop().slideDown();
    });
    $(".js-header_parent").mouseout(function(){
      $(".js-header_child").stop().slideUp();
    });


  };



  if($('.js-list_button').length){
    $('.js-list_button').on('click', function(){
      var content = $('.js-list_content');
      var title = $('.js-list_button');
      content.slideToggle();
      if(content.hasClass('js-open')){
        content.removeClass('js-open');
        title.text('［表示］');
      }else{
        content.addClass('js-open');
        title.text('［非表示］');
      }
    });
  };


  if($('.js-cta_fixed').length){
    $(window).on('load resize', function(){
      var W = $(window).width();
      var Y = 1023;
      var sidebar_height = $('.o-flex__sidebar').height();
      var main_height = sidebar_height + 10;
      // if (W > Y){
      //   $('.o-flex__main').css('min-height', main_height);
      // }else{
      //   $('.o-flex__main').css('min-height', 'auto');
      // }
    });
    $(window).on('load resize scroll', function(){
      var sidebar_height = $('.o-flex__sidebar').height();
      var main_height = $('.o-flex__main').height();
      if(main_height > sidebar_height){
        var winW = $(window).width();
        var devW = 1023;
        if (winW > devW) {
          var header_height = $('.js-header').height();
          var footer_height = $('.js-footer').offset().top;
          var cta_content = $('.js-cta_fixed').offset().top;
          var window_height = $(window).height();
          var footer_height2 = $('.js-footer').height();
          var window_scroll = $(window).scrollTop();
          var side_footer = footer_height2 + 192;
          if(window_scroll >= cta_content - header_height){
            $('.js-cta_fixed').addClass('cta_fixed');
            if(window_scroll >= footer_height - window_height){
              $('.js-cta_fixed .l-sidebar__cta__content').css('top', 'inherit');
              $('.js-cta_fixed .l-sidebar__cta__content').css('bottom', side_footer);
            }else{
              $('.js-cta_fixed .l-sidebar__cta__content').css('top', header_height);
              $('.js-cta_fixed .l-sidebar__cta__content').css('bottom', 'inherit');
            }
          }else{
            $('.js-cta_fixed').removeClass('cta_fixed');
          }
        }
      }
    });
  };

  if($('.js-fixed_pagetop').length){
    $(window).on('load resize', function(){
      var W = $(window).width();
      var Y = 1280;
      if (W >= Y){
        $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
              $('.js-fixed_pagetop').fadeIn(300);
          } else {
              $('.js-fixed_pagetop').fadeOut(300);
          }
        });
      }else{
        $('.js-fixed_pagetop').css('display', 'none');
      }
    });
  }


  //スクロールした際の動きを関数でまとめる
  function PageTopAnime() {

    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll >= 200){//200pxスクロールしたら
      $('.js-fixed_btn').removeClass('DownMove');		// DownMoveというクラス名を除去して
      $('.js-fixed_btn').addClass('UpMove');			// UpMoveというクラス名を追加して出現
    }else{//それ以外は
      if($('.js-fixed_btn').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
        $('.js-fixed_btn').removeClass('UpMove');	//  UpMoveというクラス名を除去し
        $('.js-fixed_btn').addClass('DownMove');	// DownMoveというクラス名を追加して非表示
      }
    }

    if($('.js-fixed_btn').hasClass('UpMove')){//UpMoveというクラス名がついていたら
      $('.js-fixed_btn').css('bottom','0px');// 下から10pxの位置にページリンクを指定
    }

  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
  });

  if($('.js-table_content').length){
    $('.js-table_content table').wrap('<div class="table_wrap">');
    window.onload = function() {
      new ScrollHint('.js-table_content .table_wrap',{
        i18n: {
            scrollable: 'スクロールできます'//表示されるテキストを変更
        }
      });
    }
  }

  if($('.js-accodion').length){
    $('.js-accodion').on('click', function(){
      if($('.js-nav').hasClass('is-open')){
        $('.js-nav').removeClass('is-open');
      }else{
        $('.js-nav').addClass('is-open');
      }
    });
  };

  if($('.js-mv_slider').length){
    $('.js-mv_slider').slick({
      fade: true,
      speed: 1500,
      autoplaySpeed: 3000,
      arrows: false,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true
    });
  }

  if($('.js-bg_text').length){
    var bgText = $(".js-bg_text");
    var offsetTop = bgText.offset().top;

    $(window).on('scroll resize', function () {
      console.log(offsetTop);
      if ($(window).scrollTop() >= offsetTop) {
        bgText.addClass("is-fixed");
      } else {
        bgText.removeClass("is-fixed");
      }
    });
  };

  if($('.js-copy').length){
    $('.js-copy').on('click', function(){
      var currentURL = window.location.href; // 閲覧中のサイトのURLを取得
      copyToClipboard(currentURL);
    })
  }

  function copyToClipboard(text) {
    var tempInput = $('<input>');
    $('body').append(tempInput);
    tempInput.val(text).select();
    document.execCommand('copy');
    tempInput.remove();
    alert('URLがコピーされました');
  };

  if($('.js-sns').length){
    $(window).on('load resize scroll', function(){
      var winW = $(window).width();
      var devW = 1280;
      if (winW >= devW) {
        var sns = $(".js-sns");
        var sns_offset = $(".js-sns").offset().left
        var main_content = $('.o-flex__main').offset().top;
        var header_height = $('.js-header').height();
        var footer_height = $('.js-footer').offset().top;
        var window_height = $(window).height();
        var window_scroll = $(window).scrollTop();
        if(window_scroll >= main_content - header_height){
          sns.addClass('is-fixed');
          sns.css('left', sns_offset);
          if(window_scroll >= footer_height - window_height){
            $(sns).css('left', sns_offset);
            // sns.removeClass('is-fixed');
          }else{
            $(sns).css('left', sns_offset);
            sns.addClass('is-fixed');
          }
        }else{
          sns.removeClass('is-fixed');
          $(sns).css('left', '-80px');
        }
      }
    });
  };

  if($('.js-text_content').length){
    $(document).ready(function() {
      $(".js-text_content").children("h2").prev("p").addClass("is-mb");
      $(".js-text_content").children("h3").prev("p").addClass("is-mb");
    });
  };

  if($('.js-sns').length){
    $(window).on('load resize scroll', function(){
      var winW = $(window).width();
      var devW = 1280;
      if (winW >= devW) {
        var sns = $(".js-sns");
        var sns_offset = $(".js-sns").offset().left
        var main_content = $('.o-flex__main').offset().top;
        var header_height = $('.js-header').height();
        var footer_height = $('.js-footer').offset().top;
        var window_height = $(window).height();
        var window_scroll = $(window).scrollTop();
        if(window_scroll >= main_content - header_height){
          sns.addClass('is-fixed');
          sns.css('left', sns_offset);
          if(window_scroll >= footer_height - window_height){
            $(sns).css('left', sns_offset);
            // sns.removeClass('is-fixed');
          }else{
            $(sns).css('left', sns_offset);
            sns.addClass('is-fixed');
          }
        }else{
          sns.removeClass('is-fixed');
          $(sns).css('left', '-76px');
        }
      }
    });
  };

});