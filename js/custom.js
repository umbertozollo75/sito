$(document).ready(function () {
//
//  $('.carousel').carousel({
//    interval: 1000
//  });
//
  $('.fa-angle-double-left').addClass('fa-3x');
  $('.fa-angle-double-right').addClass('fa-3x');
  
  $('.fa-angle-double-left')
    .mouseenter(function () {
      $('.fa-angle-double-left').toggleClass('fa-3x')
      $('.fa-angle-double-left').addClass('fa-5x');
    })
    .mouseout(function () {
      $('.fa-angle-double-left').toggleClass('fa-5x');
      $('.fa-angle-double-left').addClass('fa-3x');
    })
    
  $('.fa-angle-double-right')
    .mouseenter(function () {
      $('.fa-angle-double-right').toggleClass('fa-3x')
      $('.fa-angle-double-right').addClass('fa-5x');
    })
    .mouseout(function () {
      $('.fa-angle-double-right').toggleClass('fa-5x');
      $('.fa-angle-double-right').addClass('fa-3x');
    })
});