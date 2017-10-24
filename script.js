$(document).ready(function(){
    var hdr = $('#isoc_header');
    var pos = hdr.offset().top;
    $(window).scroll(function(){
      if ($(this).scrollTop() > pos + 77) {
          hdr.addClass('isoc_sticky');
      } else {
          hdr.removeClass('isoc_sticky');
      }
    });
});