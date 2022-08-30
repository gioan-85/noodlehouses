$(document).ready(function () {

  //-------------choose location-------------
  var clickable = 1;
  $('.location--placeholder').click(function(e){
    if (clickable == 0)
      return;
      clickable = 0;
    $('.location--list').slideToggle()
    setTimeout(function(){
      clickable = 1;
    },1000);
  })

  $('.location--item').click(function(){
    let locale = $(this).data('locale');
    let localeText = $(this).text();

    $('.location--list').slideToggle()
    $('.location').attr('data-locale', locale)
    $('.location--placeholder').text(localeText)
  })

  $('.container').on('click', function(e){
    if (!$(e.target).hasClass('location--placeholder') && !$(e.target).hasClass('location--item')) {
      console.log('----1---')
      if ($('.location--list').css('display') == 'block') {
        $('.location--list').slideUp()
      }
    }
  })

  //--------------slick--------------------

  let imgSlick = $('.carousel-wrapper').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            // arrows: false
        }
    }]
  });

});