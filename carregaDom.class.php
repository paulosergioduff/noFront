<?php

libxml_use_internal_errors(true); // Desativa mensagens de duplicada de DOM

class imprimeDom{
	public $caminho;
	public $tag;
	public $parametro;
	//$this->caminho = $caminho;
	
	public function DIPJS($caminho)
	{

		$dom = new DOMDocument();
		$dom->loadHTMLFile($caminho);

		// Consultando os links
		$links = $dom->getElementsByTagName('script');
		foreach ($links as $link) {
			
		  echo "<scrip src='".$link->getAttribute('src')."'>".PHP_EOL;
		    
		}
				
				
			}

		public function DIPCSS($caminho)
	{

		$dom = new DOMDocument();
		$dom->loadHTMLFile($caminho);

		// Consultando os links
		$links = $dom->getElementsByTagName('link');
		foreach ($links as $link) {
			
		   echo "<link rel='stylesheet' href='".$link->getAttribute('href')."'>".PHP_EOL;

		    
		}
				
				
			}


			public function inputCommomClass($caminho)
	{

		$dom = new DOMDocument();
		$dom->loadHTMLFile($caminho);

		$controle = 0;
		// Consultando os links
		$links = $dom->getElementsByTagName('input');
		foreach ($links as $link) {
		
		if ($controle == 0) {
				$this->novaClass = '<input class='."'".$novaClass.$link->getAttribute('class')."'";
				$this->retorno = " class='".$link->getAttribute('class').PHP_EOL."' ";
			}	
		  
		  $controle++;
		    
		}
				
				
			}
}




?>

<!DOCTYPE html>
<html>
<head>
<?php 

$dip = new imprimeDom;
$dip->DIPCSS('temas/materialize/modelo.html');

?>
	<title></title>
</head>
<body>

<?php 

$app = new imprimeDom;
$app->inputCommomClass('temas/bootstrap/form.html');
$novaClass = $app->retorno;

$file = file_get_contents('html/form-blank.html');

$novoFile = str_replace('<input ', "<input $novaClass ", $file);

echo $file;

?>

</body>
</html>


	

