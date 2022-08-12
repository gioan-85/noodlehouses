jQuery(document).ready(function (e) {
    gnb_init();

    function gnb_init() {
        var jHamburger = $('.js-gnb-menu-btn'),
          jClose = $('.gnb__menu-close'),
          jFooterAccor = $('.accordian-item-header');

        jHamburger.on('click', function(e) {
          e.preventDefault();
          $('.gnb__menu-wrap, .gnb__depth1').addClass('open');
        });

        jClose.on('click', function(e) {
          e.preventDefault();
          $('.gnb__menu-wrap, .gnb__depth1').removeClass('open');
        });

        jFooterAccor.on('click', function(e) {
          e.preventDefault();
          $(this).next().toggleClass('open');
        });
    };
});