$(function() {

  // スマホ用ドロワーメニュー
  var menuFlag = false;
  var h = $(window).height();
  $('#drawer, #dummy').css('height', h);
  $('#menuBtn').on('click', function() {
    $('#dummy').fadeIn();
    $('#cross').fadeIn();
    $('#drawer').animate({width: 'toggle'});
    $('#page').addClass('sticky');
    return false;
  });
  $('#dummy, #cross').on('click', function() {
    $('#dummy, #cross').fadeOut();
    $('#drawer').animate({width: 'toggle'});
    $('#page').removeClass('sticky');
    return false;
  });

  // スムーススクロール
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
    return false;
  });
  $('#back-to-top').on('click', function() {
    $('body,html').animate({scrollTop: 0}, 500);
    return false;
  });

  // アコーディオンメニュー
  $('#leadSentence p').each(function() {
    var width = $(window).width();
    var std = 544;
    var checkFlag;
    function check() {
      var width = $(window).width();
      if (width < std) {
        checkFlag = true;
      } else {
        checkFlag = false;
      }
    }
    check();
    if (checkFlag == true) {
      var count = 15;
      var thisText = $(this).text();
      var length = $(this).text().length;
      if (length > count) {
        var showText = thisText.substring(0, count);
        var hideText = thisText.substring(count, length);
        var insertText = showText;
        insertText += '<span class="hide">' + hideText + '</span>';
        insertText += '<span class="omit">…</span>';
        insertText += '<p style="text-align: right"><a href="#" class="more" style="color: #aaa;">∨</a></p>';
        insertText += '<p style="text-align: right"><a href="#" class="close" style="color: #aaa;">∧</a></p>';
        $(this).html(insertText);
        $('.hide, .close').hide()
      };
    }
    return false;
  });
  $('#leadSentence p .more').on('click', function() {
    $('.omit, .more').hide();
    $('.hide, .close').fadeIn();
    return false;
  });
  $('#leadSentence p .close').on('click', function() {
    $('.hide, .close').hide();
    $('.omit, .more').show();
    return false;
  });
});
