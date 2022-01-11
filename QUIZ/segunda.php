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
              	<a href="primeira.php"><li>&lt;-- VOLTAR</li></a><br><br><br>
				
			</ul>
		</nav>

		<section class="branco1">
 
				<?php

				
				$cid = $_POST['cid']; 
				

				
				?>

			<form method="post" action="terceira.php">


                <h3>2° Com quem Jerry Smith namora depois de se separar de Beth Smith? </h3>
                <br><br>
                <a href="https://rickandmorty.fandom.com/wiki/Jerry_Smith" target="_blank">
                    <img src="2.png" height="170" width="300"></a>
                <br><br><br>

                Resposta:<br>
               <input type="text" name="text" id="text"><br><br><br>

               
               <input type="hidden"  name="cid" id="cid" value=<?php echo $cid; ?>>


               <input type="submit" value="&nbsp;&nbsp;PROXIMA&nbsp;&nbsp;" name="submit_button" class="btn">
         
			</form>
            
            
		</section>
	</div>

</body>
</html>