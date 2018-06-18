<?php

require "testRecebeAtributoHTML.php";

$test = new testRecebeAtributo() ;

$arrays = ["pão", "queijo", "cenoura"];

$test->setAtributos($arrays);

$test->testRecebeAtributo();



?>