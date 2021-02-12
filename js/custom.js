$(document).ready(function () {

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

  $('#contact-form').submit(function(event) {
    event.preventDefault();
    $('#alert').text('Processing...').fadeIn(0);
    $.ajax({
      url: 'inviamail.php',
      type: 'post',
      data: $('#contact-form').serializeArray(),
      dataType: 'json',
      success: function(_response){
        var error = _response.error;
        var success = _response.success;
        if(error !== "") {
          $('#alert').html(error);
        } else {
          $('#alert').html(success);
          $('#submit-button').remove();
        }
      },
      error: function(jqXhr, json, errorThrown){
        var error = jqXhr.responseText;
        $('#alert').html(error);
      }
    });
  });
  
});