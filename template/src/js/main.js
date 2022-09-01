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

  //--------------top menu mobile--------------

  $('.btn-hambuger').on('click', function(){
    $('.nav-bar-cover').fadeIn(300, function(){
      $('.nav-bar').addClass('toggle_MO')
    })
  })

  $('.btn-close-menu, .nav-bar-dimmer').on('click', function(){
    $('.nav-bar').removeClass('toggle_MO')
    setTimeout(function(){
      $('.nav-bar-cover').fadeOut()
    }, 300);
  })

  $(window).on('resize', function(){
    if (window.innerWidth > 768) {
      $('.nav-bar-cover').attr('style','')
    }
  })

  $('.nav-item, .btn-goto').on('click', function(){
    let section = $(this).data('content')

    $('.nav-item').removeClass('active')
    $('.section--header').find('.nav-item').each(function(i,e){
      if ($(this).data('content') == section)
          $(this).addClass('active')
    })

    if (section) {
      $('body, html').animate({
        scrollTop: $('.' + section).offset().top - $('.section--header').height()
      },500)
    }

    if (window.innerWidth <= 768) {
      $('.nav-bar').removeClass('toggle_MO')
      setTimeout(function(){
        $('.nav-bar-cover').fadeOut()
      }, 300);
    }
  })

  //------------load menu--------------

  $.ajax({
		url: 'includes/load_food.php' ,
		type: "GET",
		data: "action=load_menu",
		success: function(data){
			console.log(data)
		},
		error:function(){

		}
  });

});