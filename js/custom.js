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
    event.preventDefault(); // Prevent direct form submission
    $('#alert').text('Processing...').fadeIn(0); // Display "Processing..." to let the user know that the form is being submitted
    $.ajax({
      url: 'inviamail.php',
      type: 'post',
      data: $('#contact-form').serializeArray(),
      dataType: 'json',
      success: function(_response){
        // The Ajax request is a success. _response is a JSON object
        var error = _response.error;
        var success = _response.success;
        if(error !== "") {
          // In case of error, display it to user
          $('#alert').html(error);
        } else {
          // In case of success, display it to user and remove the submit button
          $('#alert').html(success);
          $('#submit-button').remove();
        }
      },
      error: function(jqXhr, json, errorThrown){
        // In case of Ajax error too, display the result for demo purpose
        var error = jqXhr.responseText;
        $('#alert').html(error);
      }
    });
  });
/*
  $('#inviamailbutton').click(function () {
    var firstname = $("#form_firstname").val();
    var lastname = $("#form_lastname").val();
    var email = $("#form_email").val();
    var phone = $("#form_phone").val();
    var testo = $("#form_message").val();
    //Creazione di un oggetto FormData…
    var datiForm = new FormData();
    // aggiunta dati
    datiForm.append('firstname', firstname);
    datiForm.append('lastname', lastname);
    datiForm.append('email', email);
    datiForm.append('phone', phone);
    datiForm.append('testo', testo);
    $.ajax({
      url: "./inviamail.php",
      type: "POST",
      data: datiForm,
      cache: false,
      processData: false,
      contentType: false,
      success: function (response) {

      },
      error: function (error) {
        console.log(error);
      }
    });
  });
*/  
});