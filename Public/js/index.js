

$(document).ready(function(){
  /*-----------------初始化返回顶部按钮----------------------------------*/
  $('body').materialScrollTop();
  /*-----------------初始化首页视觉差效果背景-----------------------*/
  $('.parallax').parallax();
  /*-----------------初始化响应式导航栏----------------------*/
  $(".button-collapse").sideNav();
  /*-----------------替换分页按钮效果----------------------*/
  $(".current").attr('class','active chip  teal lighten=2');
  $(".pagination a").attr('class',"waves-effect chip");
  /*------------------替换默认的文章图片样式------------------*/
  $("#article img").attr({
    'style':"max-width:100%"
  });
  /*-------------百度统计代码-----------------*/
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?700d06b149737b5cf828640b314f3229";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
});

/**
 * 返回顶部
 */
(function($) {
  function mScrollTop(element, settings) {

    var _ = this,
        breakpoint;
    var scrollTo = 0;

    _.btnClass = '.material-scrolltop';
    _.revealClass = 'reveal';
    _.btnElement = $(_.btnClass);

    _.initial = {
      revealElement: 'body',
      revealPosition: 'top',
      padding: 0,
      duration: 600,
      easing: 'swing',
      onScrollEnd: false
    }

    _.options = $.extend({}, _.initial, settings);

    _.revealElement = $(_.options.revealElement);
    breakpoint = _.options.revealPosition !== 'bottom' ? _.revealElement.offset().top : _.revealElement.offset().top + _.revealElement.height();
    scrollTo = element.offsetTop + _.options.padding;

    $(document).scroll(function() {
      if (breakpoint < $(document).scrollTop()) {
        _.btnElement.addClass(_.revealClass);
      } else {
        _.btnElement.removeClass(_.revealClass);
      }
    });

    _.btnElement.click(function() {
      var trigger = true;
      $('html, body').animate({
        scrollTop: scrollTo
      }, _.options.duration, _.options.easing, function() {
        if (trigger) { // Fix callback triggering twice on chromium
          trigger = false;
          var callback = _.options.onScrollEnd;
          if (typeof callback === "function") {
            callback();
          }
        }
      });
      return false;
    });
  }

  $.fn.materialScrollTop = function() {
    var _ = this,
        opt = arguments[0],
        l = _.length,
        i = 0;
    if (typeof opt == 'object' || typeof opt == 'undefined') {
      _[i].materialScrollTop = new mScrollTop(_[i], opt);
    }
    return _;
  };
}(jQuery));
