
//ナビ
$('#nav-toggle').on('click', function() {
  $('body').toggleClass('open');
  if ( $("body").hasClass('open') ) {
      $("#menu-text").html('CLOSE');
  } else {
      $("#menu-text").html('MENU');
  }
});

$('.nav-container a[href]').on('click', function(event) {
      $('#nav-toggle').trigger('click');
    });


/* ヘッダー　トップを超えたら固定表示 */
var _window = $(window),
_header = $('.header'),
heroBottom;

_window.on('scroll',function(){
heroBottom = $('.wrapper').height();
pageheroBottom = $('.main-top').height();
if(_window.scrollTop() > heroBottom || _window.scrollTop() > pageheroBottom){
    _header.addClass('fixed');
}
else{
    _header.removeClass('fixed');
}
});

_window.trigger('scroll');



//スムーススクロール
  
  /*ページ内リンク*/
  $('a[href^="#"]').click(function() {
    var headerHeight = 76;
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    var speed = 1500;
    $('body,html').stop().animate({
      scrollTop: position
  }, speed,"easeInOutQuint");
    return false; 
  });
  
  /*トップへ戻る*/
  const pagetopBtn = document.querySelector('#page-top');
  pagetopBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });


/*
 * トップに戻るボタン　出現
 */
$(document).ready(function(){
  $("#page-top").removeClass('btnFIn').addClass('btnFOut')  ;
  $(window).on("scroll", function() {
      if ($(this).scrollTop() > 100) {
          $("#page-top").removeClass('btnFOut').addClass('btnFIn'); //ふわっと表示
      } else {
          $("#page-top").removeClass('btnFIn').addClass('btnFOut'); //ふわっと非表示
      }
      scrollHeight = $(document).height(); //ドキュメントの高さ
      scrollPosition = $(window).height() + $(window).scrollTop(); //現在地
      footHeight = $(".footer").innerHeight(); //footerの高さ（＝止めたい位置）
      if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
          $("#page-top").css({
              "position":"absolute", //pisitionをabsolute（親：wrapperからの絶対値）に変更
              "bottom": footHeight - 300,
              "opacity": "1"//下からfooterの高さ + 20px上げた位置に配置
          });
      } else { //それ以外の場合は
          $("#page-top").css({
              "position":"fixed", //固定表示
              "bottom": "10px" , //下から20px上げた位置に
              "opacity" : "1"
          });
      }
  });
});



/*スクロール時アニメーション*/
const scrollAnimationElm = document.querySelectorAll('.sa');
const scrollAnimationFunc = function() {
  for(let i = 0; i < scrollAnimationElm.length; i++) {
    const triggerMargin = 300;
    if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
      scrollAnimationElm[i].classList.add('show');
    }
  }
}
window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);



/*スマホ時ホバーアニメーション無効*/

var touch = 'ontouchstart' in document.documentElement
            || navigator.maxTouchPoints > 0
            || navigator.msMaxTouchPoints > 0;
 
if (touch) { // remove all :hover stylesheets
    try { // prevent exception on browsers not supporting DOM styleSheets properly
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;
 
            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;
 
                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    styleSheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}}

 /*Instagram 表示*/

$.getJSON("https://sonosakimirai.com/wp/wp-content/themes/sonosaki/php/instagram.php", function(instagram_data){

const gallery_data = instagram_data["business_discovery"]["media"]["data"];
let photos = "";


if (window.matchMedia && window.matchMedia('(max-device-width: 560px)').matches) {
  const photo_length_sp = 4;
  for(let i = 0; i < photo_length_sp ;i++){
    if (!gallery_data[i].media_url) {
      continue;
    }
    if(gallery_data[i].media_url.indexOf('video')>0){
      photos += '<li class="gallery-item"><a href="' + gallery_data[i].permalink + '" target="_blank"><svg version="1.1" id="layer1" xmlns="http://www.w3.org/2000/svg" width="300px" height="300px" viewBox="0 0 300 300"><g><rect x="95.7" y="69.2" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" width="143.7" height="127.3"/><polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="60.6,153.7 60.6,230.8 138.1,230.8 	"/></g></svg><video src="' + gallery_data[i].media_url + '" controls></video></a></li>';
    } 
    else {
      photos += '<li class="gallery-item"><a href="' + gallery_data[i].permalink + '" target="_blank"><svg version="1.1" id="layer1" xmlns="http://www.w3.org/2000/svg" width="300px" height="300px" viewBox="0 0 300 300"><g><rect x="95.7" y="69.2" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" width="143.7" height="127.3"/><polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="60.6,153.7 60.6,230.8 138.1,230.8 	"/></g></svg><img src="' + gallery_data[i].media_url + '"></a></li>';
    }
  }

}else{
  const photo_length = 6;

  for(let i = 0; i < photo_length ;i++){
    if (!gallery_data[i].media_url) {
      continue;
    }
  
    if(gallery_data[i].media_url.indexOf('video')>0){
      photos += '<li class="gallery-item"><a href="' + gallery_data[i].permalink + '" target="_blank"><svg version="1.1" id="layer1" xmlns="http://www.w3.org/2000/svg" width="300px" height="300px" viewBox="0 0 300 300"><g><rect x="95.7" y="69.2" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" width="143.7" height="127.3"/><polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="60.6,153.7 60.6,230.8 138.1,230.8 	"/></g></svg><video src="' + gallery_data[i].media_url + '" controls></video></a></li>';
    } 
    else {
      photos += '<li class="gallery-item"><a href="' + gallery_data[i].permalink + '" target="_blank"><svg version="1.1" id="layer1" xmlns="http://www.w3.org/2000/svg" width="300px" height="300px" viewBox="0 0 300 300"><g><rect x="95.7" y="69.2" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" width="143.7" height="127.3"/><polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="60.6,153.7 60.6,230.8 138.1,230.8 	"/></g></svg><img src="' + gallery_data[i].media_url + '"></a></li>';
    }
    
  }
}

$("#gallery").append(photos); 

});


$(document).ready(function() {
  if ($(window).width() <= 560) {
    $('.image-column').insertAfter('.profile-box-top');
  }
});