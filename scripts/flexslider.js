import flexslider from 'flexslider/2.6.2/jquery.flexslider.js';

jQuery(($) => {
  $('.single-portfolio-images').flexslider({
    selector: '.single-portfolio-image',
    animation: 'fade',
    prevText: '',
    nextText: '',
    controlNav: false,
    directionNav: true,
    smoothHeight: true,
    pauseOnHover: true,
    touch: true,
  });
});
