$(function () {
  var curSlide = 0

  var maxSlide = $('.image').length - 1

  var delay = 5

  initSlide()
  changeSlide()

  function initSlide() {
    $('.image').hide()
    $('.image').eq(0).show()
    for (var i = 0; i < maxSlide + 1; i++) {
      var content = $('.bullets').html()
      if (i == 0) content += '<span class="active-slide"></span>'
      else content += '<span></span>'
      $('.bullets').html(content)
    }
  }

  function changeSlide() {
    setInterval(function () {
      $('.image').eq(curSlide).stop().fadeOut(2000)
      curSlide++
      if (curSlide > maxSlide) curSlide = 0
      $('.image').eq(curSlide).stop().fadeIn(2000)
      $('.bullets span').removeClass('active-slide')
      $('.bullets span').eq(curSlide).addClass('active-slide')
    }, delay * 1000)
  }

  $('body').on('click', '.bullets span', function () {
    var currentBullet = $(this)
    $('.image').eq(curSlide).stop().fadeOut(1000)
    curSlide = currentBullet.index()
    $('.image').eq(curSlide).stop().fadeIn(1000)
    $('.bullets span').removeClass('active-slide')
    currentBullet.addClass('active-slide')
  })
})
