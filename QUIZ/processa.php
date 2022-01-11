<!DOCTYPE html>	
<html lang="pt-br">
<head>
	<title>QUIZ Rick and Morty</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>

	<div class="container"> 
		<section class="branco1">
<?php
/*1º*/
$cid = $_POST['cid'];

/*2º*/
$text = $_POST['text'];

/*3º*/
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$j = $_POST['j'];
$l = $_POST['l'];

/*4º*/
$q4 = $_POST['q4'];

/*RESPOSTA CERTA*/
$resposta1 = "Seattle";
$resposta2 = "Kiara";

$resposta3a = "f";
$resposta3b = "f";
$resposta3c = "v";
$resposta3d = "f";
$resposta3e = "f";
$resposta3f = "v";
$resposta3g = "v";
$resposta3h = "v";

$resposta3j = "f";
$resposta3l = "v";

$resposta4 = "3 temporada";


/* VARIAVEIS GLOBAL*/
$acertou = 0;
$errou = 0;
$resultado= 0;


/*CORREÇÂO*/
if ($cid == $resposta1) {$resultado += 2.5;$acertou++;}
else{$errou++;}

if ($text == $resposta2) {$resultado += 2.5;$acertou++;}
else{$errou++;}

if ($a == $resposta3a) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($b == $resposta3b) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($c == $resposta3c) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($d == $resposta3d) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($e == $resposta3e) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($f == $resposta3f) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($g == $resposta3g) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($h == $resposta3h) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($j == $resposta3j) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($l == $resposta3l) {$resultado += 0.25;$acertou++;}
else{$errou++;}

if ($q4 == $resposta4) {$resultado += 2.5;$acertou++;}
else{$errou++;}

/* CALCULO */
$calc = 10;
$porcent = $resultado; 
?>


<!-- LINHA 1 -->
<table border="1" bgcolor="#44ECF8" width="870" height="600" >
    <tr>
        <th><b>&nbsp;&nbsp;Questões&nbsp;&nbsp;</b></th>
        <th><b>&nbsp;&nbsp;Sua resposta&nbsp;&nbsp;</b></th>
        <th><b>&nbsp;&nbsp;Resposta correta&nbsp;&nbsp;</b></th>
        <th><b>&nbsp;&nbsp;NOTA&nbsp;&nbsp;</b></th>
 
    </tr>
    <!-- LINHA 2 -->
    <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 1º&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $cid; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;Seattle&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($cid == $resposta1) { $resultado +=2.5; echo "2,5";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
 
    </tr>
    <!-- LINHA 3 -->
    <tr>
        <th align="center"><b>-----</b></th>
        <th>-----</th>
        <th>-----</th>
        <th><b>-----</b></th>
 
    </tr>
    <!-- LINHA 4 -->
    <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 2º&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $text; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;Kiaras&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($text == $resposta2) { $resultado +=2.5; echo "2,5";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
 
    </tr>
    <!-- LINHA 5 -->
    <tr>
        <th align="center"><b>-----</b></th>
        <th>-----</th>
        <th>-----</th>
        <th><b>-----</b></th>
 
    </tr>
    <!-- LINHA 6 -->
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º A)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $a; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;f&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($a == $resposta3a) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 7 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º B)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $b; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;f&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($b == $resposta3b) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 8 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º C)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $c; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;v&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($c == $resposta3c) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 9 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º D)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $d; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;f&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($d == $resposta3d) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 10 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º E)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $e; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;f&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($e == $resposta3e) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 11 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º F)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $f; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;v&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($f == $resposta3f) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 12 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º G)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $g; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;v&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($g == $resposta3g) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>  
    <!-- LINHA 13 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º H)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $h; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;v&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($h == $resposta3h) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    </tr>
    <!-- LINHA 14 -->  
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º I)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $j; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;f&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($j == $resposta3j) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 15 -->
    </tr>
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 3º J)&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $l; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;v&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($l == $resposta3l) { $resultado +=0.25; echo "0,25";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    </tr>
    <!-- LINHA 16 -->
    <tr>
        <th align="center"><b>-----</b></th>
        <th>-----</th>
        <th>-----</th>
        <th><b>-----</b></th>
 
    </tr>
    </tr>
    <!-- LINHA 17 -->
        <tr>
        <th align="center"><b>&nbsp;&nbsp;Questão 4º&nbsp;&nbsp;</b></th>
        <th>&nbsp;&nbsp;<?php echo $q4; ?>&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;3 temporada&nbsp;&nbsp;</th>
        <th><b>&nbsp;&nbsp;<?php if ($q4 == $resposta4) { $resultado +=2.5; echo "2,5";} else{echo "0";} ?>&nbsp;&nbsp;</b></th>
    </tr>
    <!-- LINHA 18 -->
    <tr>
        <th align="center"><b></b></th>
        <th></th>
        <th></th>
        <th bgcolor="#FFFF00"><b>&nbsp;&nbsp;<?php echo $porcent;?>&nbsp;&nbsp;</b></th>
 
    </tr>
    <br>      	
            
		</section>
	</div>

</body>
</html>