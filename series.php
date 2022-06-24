<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de séries</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="banner">
         <img src="imagens/banner.jpg">
</div>
<div class="texto">

    <h2> Cadastre suas séries Favorita </h2>
    <hr>
    <br>
    <fom method="post" id="cadastro" action="cadastrarserie.php">
<fieldset id="cad">
    <p><label for="titulo">Título:</label> <input type="text" name="titulo" id="titulo" size="50" maxlenght="100" placeholder=></p>
    <p><label for="atrizrprincipal">Atriz principal:</label> <input type="text" name="atrizprincipal" id="atrizprincipal" size="50" maxlenght="100" placeholder=></p>
    <p><label for="atorprincipal">Atrizp rincipal:</label> <input type="text" name="atorprincipal" id="atorprincipal" size="50" maxlenght="100" placeholder=></p>
    <p><label for="qtdtemporadas">qtdtemporadas:</label> <input type="text" name="qtdtemporadas" id="qtdtemporadas" size="50" maxlenght="100" placeholder=></p>
    <p><label for="totalepisodios">Total de epísodios:</label> <input type="text" name="totalepisodios" id="totalepisodios" size="50" maxlenght="100" placeholder=></p>

    <p>Sinopse</p>
  <br><br><br><br>  <p><textarea name="sinopse" id="sinopse" class="textarea" ></textarea></p>

</fieldset>
<br>
<hr>
<input type="submit" value="Cadastrar">
<hr>
</form>



</body>
</html>