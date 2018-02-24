jQuery(($) => {
  let docHeight = (window.innerWidth / 2);

  $('.scroll-down').on('click', function() {
    $('html, body').animate({
      scrollTop: docHeight,
    }, 1000);
  });
});
