<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Introdução ao JQuery</title>
    <link rel="stylesheet" 	href="estilos.css">
    <script src="jquery/jquery-1.11.1.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#texto").hide();

        $("#exibir").mousemove(function() {
					$("#texto").show("slow");
        });

        $("#ocultar").mousemove(function() {
					$("#texto").hide("slow");
        });
      });
    </script>
  </head>
  <body>
    <div id="principal">
      <div id="topo">

      </div>
      <div id="conteudo">
				<a href="#" id="exibir">Exibir o texto</a>
        <br>
        <a href="#" id="ocultar">Ocultar o texto</a>
        <p id="texto">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
        </p>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>