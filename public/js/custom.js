$('.arrow-next').click(function() {
  var currentSlide = $('.active-slide'),
    nextSlide = currentSlide.next(),
    currentDot = $('.active-dot'),
    nextDot = currentDot.next();

  if (nextSlide.length === 0) {
    nextSlide = $('.slide').first();
    nextDot = $('.dot').first();
  }

  currentSlide.fadeOut(600).removeClass('active-slide');
  nextSlide.fadeIn(600).addClass('active-slide');

  currentDot.removeClass('active-dot');
  nextDot.addClass('active-dot');
});

$('.arrow-prev').click(function() {
  var currentSlide = $('.active-slide'),
    prevSlide = currentSlide.prev(),
    currentDot = $('.active-dot'),
    prevDot = currentDot.prev();

  if (prevSlide.length === 0) {
    prevSlide = $('.slide').last();
    prevDot = $('.dot').last();
  }

  currentSlide.fadeOut(600).removeClass('active-slide');
  prevSlide.fadeIn(600).addClass('active-slide');

  currentDot.removeClass('active-dot');
  prevDot.addClass('active-dot');
});

// this bit will resize the sliders height to make it responsive
$(window).on('load resize', function() {
  var x = $('.active-slide img').height() + "px";

  $('.slider').css('min-height', x);
  $('p').text(x);
});

//this part will add a dot for each slider item, then assign a class name to the first child to get the active state
$('section').each(function() {
  var a = $('.slide').length;
  for (i = 0; i < a; i++) {
    $('.slider-dots').append('<li class="dot">&bull;</li>');
  }
});

$('.slider div:first').addClass('active-slide');
$('.slider-dots li:first').addClass('active-dot');