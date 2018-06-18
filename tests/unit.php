<?php

require "testRecebeAtributoHTML.php";

$test = new testRecebeAtributo() ;

$arrays = ["pão", "queijo", "cenoura"];

$test->setControle($arrays);

$test->testRecebeAtributo();



?>