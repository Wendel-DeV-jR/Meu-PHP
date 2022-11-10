<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="calc.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">

    <title>Exercicio2-tabuada</exercicio2-tabuada></title>
</head>
<body>
<center>
    <div>
 <form action = "index.php" method ="get">
 <h3>Tabuada simples</h3><br>
 <label class="formulario">digite um numero:</label><input type="text" name="numDigitado"><br>
 <p><input type="submit" value="calcular" class="botao"></p>
</form>
    <section>
    <?php
$numDigitado = $_GET['numDigitado'];  
if($numDigitado != ""){
  for($i=1; $i<=10; $i++){
   echo $numDigitado." x ".$i." = ".($numDigitado*$i)."<br>";
  }
}
else{
    echo "<br>Digite um numero acima para calcular";
}
 ?>
 </section>

</form>   
</div>
</center>
</body>
</html>

  