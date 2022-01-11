<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>QUIZ Rick and Morty</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <script src="jquery-2.1.4.min.js">
    </script>
    <script src="javascript.js"></script>
</head>
<body>

	<div class="container"> 
		<nav class="roxo4">
		<ul class="menu">
				<a href="quiz.php"><li>HOME</li></a><br><br><br>
                <a href="segunda.php"><li>&lt;-- VOLTAR</li></a><br><br><br>

				
			</ul>
		</nav>

		<section class="branco4">

            <?php 
                
                $cid = $_POST['cid']; 

                $text = $_POST['text']; 

                    ?>
			 <form method="post" action="quarta.php">

            <h3>3º Quais desses personagens fazem parte do universon Rick and Morty? </h3>
                 <br><br>
                <b>Personagens:</b><br><br>
                A)<img src="terceira/1.jpg" height="100" width="150">
                <input type="radio" name="a" value="v" id="v">V
                <input type="radio" name="a" value="f" id="f">F<br><br>

                B)<img src="terceira/2.jpg" height="100" width="150">
                <input type="radio" name="b" value="v" id="v">V
                <input type="radio" name="b" value="f" id="f">F<br><br>

                C)<img src="terceira/3.jpg" height="100" width="150">
                <input type="radio" name="c" value="v" id="v">V
                <input type="radio" name="c" value="f" id="f">F<br><br>

                D)<img src="terceira/4.jpg" height="100" width="150">
                <input type="radio" name="d" value="v" id="v">V
                <input type="radio" name="d" value="f" id="f">F<br><br>
                 
                E)<img src="terceira/5.png" height="100" width="150">
                <input type="radio" name="e" value="v" id="v">V
                <input type="radio" name="e" value="f" id="f">F<br><br>

                F)<img src="terceira/6.png" height="100" width="150">
                <input type="radio" name="f" value="v" id="v">V
                <input type="radio" name="f" value="f" id="f">F<br><br>

                G)<img src="terceira/7.jpg" height="100" width="150">
                <input type="radio" name="g" value="v" id="v">V
                <input type="radio" name="g" value="f" id="f">F<br><br>

                H)<img src="terceira/8.jfif" height="100" width="150">
                <input type="radio" name="h" value="v" id="v">V
                <input type="radio" name="h" value="f" id="f">F<br><br>

                I)<img src="terceira/10.png" height="100" width="150">
                <input type="radio" name="j" value="v" id="v">V
                <input type="radio" name="j" value="f" id="f">F<br><br>

                J)<img src="terceira/11.jfif" height="100" width="150">
                <input type="radio" name="l" value="v" id="v">V
                <input type="radio" name="l" value="f" id="f">F<br><br>
                
                <input type="hidden"  name="cid" id="cid" value=<?php echo $cid; ?>>
                <input type="hidden"  name="text" id="text" value=<?php echo $text; ?>>


                <button type="submit" class="btn">&nbsp;&nbsp;PROXIMA&nbsp;&nbsp;</button>
                       
                
            </form>
            
            
		</section>
	</div>

</body>
</html>