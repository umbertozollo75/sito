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
      url: './script/inviamail.php',
      type: "POST",
      data: $('#contact-form').serializeArray(),
      dataType: 'json',
      success: function(response) {
        console.log(response);
        
        var error = response.codErrore;
        if (error == "1") {
          $('#alert').html("Error!!!");
        } else {
          $('#submit-button').remove();
        }
      },
      error: function(error){
         console.log("Error:");
         console.log(error);
    }
    });
  });
  
});