import 'toggle-navigation/src/toggle-navigation';

jQuery(($) => {
  $('.navigation-toggle').toggleNavigation();

  const body = $('body');

  function setLoadedClass() {
    body.addClass('body-loaded');
  }

  setTimeout(setLoadedClass, 250);

  $(window).bind('beforeunload',function(){
    body.removeClass('body-loaded');
  });
});
