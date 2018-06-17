<!DOCTYPE html>
<html>
<head>
<?php 

require_once "carregaDom.class.php";
require_once "menu.class.php";

$dip = new imprimeDom;
$dip->DIPCSS('temas/bootstrap/modelo.html'); // Carrega CSSs
$dip->DIPJS('temas/bootstrap/modelo.html'); // Carrega CSSs

?>
	<title></title>
</head>
<body>

<?php 

$euQueroATag = 'button';
$localizadaEm = 'html/form-blank.html';

	$app = new imprimeDom;
	$app->inputCommomClass('temas/bootstrap/form.html', $euQueroATag); // Usa uma página HTML como modelo e injeta dependências CSS na página
	$novaClassInput = $app->retorno;

$seTransformeEm = $novaClassInput;
$baseadoNoTemplate = 'temas/bootstrap/form.html'; // Formulário de exemplo (não é bootstrap)


$originalHTML = file_get_contents('html/form-blank.html');

$novoHTML = str_replace("$euQueroATag", "$euQueroATag $novaClassInput ", $originalHTML);

echo $novoHTML;


echo "<ul>";

$menu =  new menuGeral;

$menu->tag = 'li';
$menu->class = "$novaClassInput";

echo $menu->geraMenu('Meu novo item', 'http://wwwgoogle.com');

echo "</ul>";
?>

</body>
</html>
