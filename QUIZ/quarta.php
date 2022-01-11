<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>QUIZ Rick and Morty</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">


</head>
<body>

	<div class="container"> 
		<nav class="roxo1">
		<ul class="menu">
				<a href="quiz.php"><li>HOME</li></a><br><br><br>
                <a href="terceira.php"><li>&lt;-- VOLTAR</li></a><br><br><br>


			</ul>
		</nav>

		<section class="branco1">

                <?php

                $cid = $_POST['cid']; 

                $text = $_POST["text"];
 
                $a = $_POST["a"];


                $b = $_POST["b"];
                $c = $_POST["c"];
                $d = $_POST["d"];
                $e = $_POST["e"];
                $f= $_POST["f"];
                $g = $_POST["g"];
                $h = $_POST["h"];
                $j = $_POST["j"];
                $l = $_POST["l"];
          
              ?>

			 <form method="post" action="processa.php">
            
            <h3>4º Qual é a temporada do episódio "Pickle Rick"? </h3>
                <a href="https://rickandmorty.fandom.com/wiki/Rick_Sanchez" target="_blank">
                <img src="4.png" height="170" width="300"> </a>
                <br><br><br>
                 1º Temporada&nbsp;<input type="radio" value="1 temporada" id="q4" name="q4" checked><br><br>
                 2º Temporada&nbsp;<input type="radio" value="2 temporada" id="q4" name="q4"><br><br>
                 3º Temporada&nbsp;<input type="radio" value="3 temporada" id="q4" name="q4"><br><br>
                 4º Temporada&nbsp;<input type="radio" value="4 temporada" id="q4" name="q4"><br><br>

               
                <input type="hidden"  name="cid" id="cid" value=<?php echo $cid; ?>>
                <input type="hidden"  name="text" id="text" value=<?php echo $text; ?>>

                <input type="hidden"  name="a" id="a" value=<?php echo $a; ?>>
                <input type="hidden"  name="b" id="b" value=<?php echo $b; ?>>
                <input type="hidden"  name="c" id="c" value=<?php echo $c; ?>>
                <input type="hidden"  name="d" id="d" value=<?php echo $d; ?>>
                <input type="hidden"  name="e" id="e" value=<?php echo $e; ?>>
                <input type="hidden"  name="f" id="f" value=<?php echo $f; ?>>
                <input type="hidden"  name="g" id="g" value=<?php echo $g; ?>>
                <input type="hidden"  name="h" id="h" value=<?php echo $h; ?>>

                <input type="hidden"  name="j" id="j" value=<?php echo $j; ?>>
                <input type="hidden"  name="l" id="l" value=<?php echo $l; ?>>


                
                    <button type="submit" class="btn">&nbsp;&nbsp;RESULTADO&nbsp;&nbsp;</button>
                
            </form>
            
            
		</section>
	</div>

</body>
</html>