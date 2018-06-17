<!DOCTYPE html>
<html>
<head>
<?php
require_once "carregaDom.class.php";
$dip = new imprimeDom;
$dip->DIPCSS('temas/bootstrap/modelo.html'); // Carrega CSSs
$dip->DIPJS('temas/bootstrap/modelo.html'); // Carrega CSSs
?>
	<title></title>
</head>
<body>

<?php
$app          = new imprimeDOM; // Instancia classe de captura de DOM
$app->tag = $euQueroATag  = 'button';
$app->alvo = $localizadaEm = 'html/form-alvo.html';
$modelo = $app->modelo = 'temas/bootstrap/form-modelo-bootstrap.html'; // Página modelo para aplicar o template
$app->inputCommomClass($modelo, $euQueroATag); // Usa uma página HTML como modelo e injeta dependências CSS na página
$app->novoAtributo    = $app->retorno; // Determina novo atributo para a tag

$app->entrega();


?>

</body>
</html>
