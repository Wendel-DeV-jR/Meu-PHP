<!DOCTYPE html>



<html>
<head>
    <meta charset="utf-8">
    <title>Lógica de Programação com PHP - Hipoteticus</title>
    <link rel="stylesheet" type="text/css" href="senai.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">



</head>
<header> 
    <center><h1>Hipotheticus</h1></center>
</header>
<body>
  
<div>



<form action='index.php' method="get">
<h3>Calculo de horas Trabalhadas</h3><br>
<label class="hora">Horas normais trabalhadas:</label><input type="text" name="Hnormal"><br>
<label class="hora">Horas extras trabalhadas:</label><input type="text" name="Hextras"><br>
<label class="hora">Usuário  de Vale transporte?</label><select name="vale" >
    <option selected>Sim</option>
    <option>Não</option>
    </select>
<p><input type="submit" value="Calcular" class="botao"></p>
</form>



<section>

<?php
   $Hnormal = $_GET['Hnormal'];
   $Hextras = $_GET['Hextras'];
   $vale = $_GET['vale'];

   if($Hnormal == "" && $Hextras == ""){
      echo"<p>prencha os campos<p/>";
    }
    else{
      $totalGross = ($Hnormal * 10) + ($Hextras*15);
      $taxas= ($totalGross *10)/100;
      if($vale == "sim"){
        $vale = ($totalGross*6)/100;
        echo "<br>o valor do desconto é: $vale R$";
    }else{
        $vale = 0;
    }
    $saldo = $totalGross - $taxas - $vale;
    echo"<br>O salario bruto é de: $totalGross";
    echo"<br>A taxa é: $taxas";
    echo"<br>O salario liquido é: $saldo";
   }
    
 
?>

</section>
</div>


</body>
</html>