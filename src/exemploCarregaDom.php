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
$define          = new imprimeDOM; // Instancia classe de captura de DOM
$define->tag = 'button'; // Define a tag a ser utilizada no novo template
$contagem = ["button"];
$define->alvo = 'html/form-alvo.html'; //Escolhe uma página para aplicar a mudança
$modelo = $define->modelo = 'temas/bootstrap/form-modelo-bootstrap.html'; // Página modelo para aplicar o template
$define->CommomClass($modelo, $define->tag); // Usa uma página HTML como modelo e injeta dependências CSS na página
$define->novoAtributo    = $define->retorno; // Determina novo atributo para a tag

$define->entregaResultado($contagem);

/*

1 - Pegar todo conteúdo do html alvo V
2 - Pegar o próximo valor de class de uma array e substituir pela class model



*/


?>

</body>
</html>
