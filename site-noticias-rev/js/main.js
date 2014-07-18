$(document).ready(function() {

  function inserirNoticia() {
    var values = $('#form-cadastrar').serialize();
    $.ajax({
      url: 'alterar.php?action=insert',
      type: 'post',
      data: values
    });
    $('#lista-cadastrados').load('listar.php');
    return false;
  }

  $('#form-cadastrar .botao').click(function() {
    inserirNoticia();
  });
});

