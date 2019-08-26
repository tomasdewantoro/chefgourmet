var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    x2 = 0,
    y2 = 0,
    friction = 1 / 30;
    friction2 = 1/15;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;


  x2 += (lFollowX - x2) * friction2;
  y2 += (lFollowY - y2) * friction2;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';
  translate2 = 'translate(' + x2 + 'px, ' + y2 + 'px) scale(1.1)';

  $('.home-header').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });
  $('.experience-a').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });
  $('.experience-b').css({
    '-webit-transform': translate2,
    '-moz-transform': translate2,
    'transform': translate2
  });
  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();