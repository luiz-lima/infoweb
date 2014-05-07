<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Acessar painel de controle</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div id="principal">
      <div id="topo">

      </div>
      <div id="conteudo">
        <h1>
          Acesso ao painel de controle
        </h1>
        <?php
        $err = $_GET['err'];
        if (isset($err)) {
            echo '<h2 class="mensagem erro">Usuário ou senha inválidos!</h2>';
        }
        ?>
        <form id="form-login" method="post" action="autentica.php">
          <label for="campo-login">Nome de usuário</label>
          <input type="text" id="campo-login" class="campo-texto" name="login">
          <label for="campo-senha">Senha</label>
          <input type="password" id="campo-senha" class="campo-texto" name="senha">
          <input type="submit" id="cn-botao-enviar" class="botao" value="Acessar">
        </form>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>
