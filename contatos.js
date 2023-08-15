

//->CONTATOSCLIENTES

$(document).ready(function() {
    $('#contact-form').submit(function(e) {
      e.preventDefault();
      var nome = $('#nome').val();
      var email = $('#email').val();
      var email = $('#assunto').val();
      var message = $('#message').val();
      $.ajax({
        url: 'enviar-contato.php',
        method: 'POST',
        data: {nome: nome, email: email, message: message},
        success: function(response) {
          alert(response);
          $('#nome').val('');
          $('#email').val('');
          $('#assunto').val('');
          $('#message').val('');
        }
      });
    });
  });