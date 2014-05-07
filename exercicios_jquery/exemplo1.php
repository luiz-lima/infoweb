<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Introdução ao JQuery</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="jquery/jquery-1.11.1.min.js"></script>
    <script>
      $(document).ready(function() {
        $("h1").hide();
        $("h1").show("slow");
        $("h1").css("color", "red");
      });
    </script>
  </head>
  <body>
    <div id="principal">
      <div id="topo">

      </div>
      <div id="conteudo">
				<h1>
          Olá!
        </h1>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>