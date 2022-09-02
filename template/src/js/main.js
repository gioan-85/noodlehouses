$(document).ready(function () {
  var _location = '';
  //-------------choose location-------------
  $.ajax({
    url: '../load_food.php' ,
    type: "POST",
    data: "action=load_locale",
    success: function(data,status,jsXHR){
      var location = JSON.parse(data);
      let locationContent = '';
      location.forEach(e => {
        locationContent += `<li class="location--item updated" data-locale="${e.key}"><a href="${e.link}">${e.location}</a></li>`
      });
      $('.location--list').html(locationContent);
      chooseLocation();
    },
    error:function(err){
      console.log(err)
    }
  });

  function chooseLocation() {
    var clickable = 1;
    $('.location--placeholder').click(function(e){
      if (clickable == 0)
        return;
        clickable = 0;
      $('.location--list').slideDown()
      setTimeout(function(){
        clickable = 1;
      },1000);
    })

    $('.location--item').click(function(){
      let locale = $(this).data('locale');
      let localeText = $(this).text();

      $('.section--menu .location--list').slideUp()
      $('.location').attr('data-locale', locale)
      $('.location--placeholder').text(localeText).removeClass('has-error')
      _location = locale;

      // load_menu(_location);
    })

    $('.container').on('click', function(e){
      if (!$(e.target).hasClass('location--placeholder') && !$(e.target).hasClass('location--item')) {
        if ($('.section--menu .location--list').css('display') == 'block') {
          $('.section--menu .location--list').slideUp()
        }
      }
    })
  }

  //--------------slick--------------------
  let slickSetting = {
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
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
  }
  let imgSlick = $('.carousel-wrapper').slick(slickSetting);

  //--------------top menu mobile--------------

  $('.btn-hambuger').on('click', function(){
    $('.nav-bar-cover').fadeIn(300, function(){
      $('.nav-bar').addClass('toggle_MO')
    })
  })

  $('.section--header .btn-close, .nav-bar-dimmer').on('click', function(){
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

  $('.nav-item').on('click', function(){
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
  function renderMenu (name) {
    console.log(name)
    let content = ''
    if (name !== '' && name != '\n'){
      content = `
        <div class="prod-item">
          <div class="wrapper">
            <div class="prod-img">
              <div class="prod-img--cover">
                <img src="./images/menu/${name.replaceAll(' ','')}_menu.png">
              </div>
            </div>
            <div class="prod-name">${name}</div>
            <!--<div class="prod-price fw-bold">$20 - $30</div>-->
            <span class="prod-link btn-order-now">Order now</span>
          </div>
        </div>
      `;
    }
    return content;
  }

  function chooseMenu (){
    $('.section--menu .prod-item').on('click', function(){
      let locale = $('.section--menu .location').attr('data-locale');

      if (!locale) {
        $('.section--menu .location--placeholder').addClass('has-error');
        return;
      }
      console.log(locale)
    })
  }

  function load_menu (location) {
    let data = "action=load_menu&location=" + location
    console.log(data)
    $.ajax({
      url: '../load_food.php' ,
      type: "POST",
      data: data,
      success: function(data,status,jsXHR){
        let menuList = data.split(';');
        console.log(menuList)
        let content = '';
        menuList.forEach(element => {
          content += renderMenu(element)
        });

        imgSlick.slick('unslick');
        $('.section--menu .carousel-wrapper').html(content);
        imgSlick = $('.carousel-wrapper').slick(slickSetting);
        orderNow();
        // chooseMenu();
      },
      error:function(err){
        console.log(err)
      }
    });
  }

  load_menu(null);

  //-----------open choose location------------

  function orderNow (){
    $('.btn-order-now').on('click', function(){
      $('.popup-location').fadeIn();
    })

    $('.popup-location .dimmer, .popup-location .btn-close').on('click', function(){
      $('.popup-location').fadeOut();
    })
  }

  orderNow();


});