<?php
libxml_use_internal_errors(true); // Desativa mensagens de duplicada de DOM
class imprimeDOM
{
				public $caminho;
				public $tag;
				public $parametro;
				public $alvo;
				public $modelo;
				public $novoAtributo;
				public $entrega;
				public function DIPJS($caminho)
				{
								$dom = new DOMDocument();
								$dom->loadHTMLFile($caminho);
								// Consultando os links
								$links = $dom->getElementsByTagName('script');
								foreach ($links as $link) {
												echo "<scrip src='" . $link->getAttribute('src') . "'>" . PHP_EOL;
								}
				}
				public function DIPCSS($caminho)
				{
								$dom = new DOMDocument();
								$dom->loadHTMLFile($caminho);
								// Consultando os links
								$links = $dom->getElementsByTagName('link');
								foreach ($links as $link) {
												echo "<link rel='stylesheet' href='" . $link->getAttribute('href') . "'>" . PHP_EOL;
								}
				}
				public function inputCommomClass($caminho, $tag)
				{
								$dom = new DOMDocument();
								$dom->loadHTMLFile($caminho);
								$controle = 0; // Variável de controle
								// Consultando os links
								$links    = $dom->getElementsByTagName($tag);
								foreach ($links as $link) {
												if ($controle == 0) { // Pega primeiro valor da class e assume como padrão
																$this->novaClass = '<input class=' . "'" . $link->getAttribute('class') . "' >"; // Retorna tag do HTML com a nova class
																$this->retorno   = " class='" . $link->getAttribute('class') . PHP_EOL . "' ";
																// Oferece ópção para troca de classe
												}
												$controle++;
								}
							}
				public function CommomTag($caminho, $tag, $atributo)
				{
								$dom = new DOMDocument();
								$dom->loadHTMLFile($caminho);
								$controle = 0; // Variável de controle
								// Consultando os links
								$links    = $dom->getElementsByTagName($tag);
								foreach ($links as $link) {
												if ($controle == 0) { // Pega primeiro valor e assume como padrão
																$this->novaClass = '<'.$tagN.' class=' . "'" . $link->getAttribute($atributo) . "' >"; // Retorna tag do HTML com a nova class
																$this->retorno   = " class='" . $link->getAttribute($atributo) . PHP_EOL . "' ";
																// Oferece ópção para troca de classe
												}
												$controle++;
								}
				}
				public function entregaResultado(){
					$this->alvo = file_get_contents($this->alvo); // Pega todo conteúdo da página html alvo
					$this->entrega = str_replace("$this->tag", "$this->tag $this->novoAtributo ", $this->alvo); // str_replace substitui atributo antigo
					echo $this->entrega; // Imprime na tela o resultado da troca
				}
}
?>




	

