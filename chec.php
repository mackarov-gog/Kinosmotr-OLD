<?php

if (isset($_POST['submit']))
{oplat();}

function oplat()
{$polz = $_COOKIE['login'];



$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");
$sql = "UPDATE bilet,korzin SET prodan=2 WHERE idbilet=idbilets and korzin.polz='$polz' and prodan=1";
$result = mysqli_query($link, $sql);


}
  ?>




<!DOCTYPE html>
<html>
  <head>
      <title>Киносмотр</title>
      <link href="css/menu.css" rel="stylesheet" type="text/css">
     
     <link href="css/teloanc0.css" rel="stylesheet" type="text/css">
         <script src="js/myscript.js"></script>
      <link rel="shortcut icon" href="images/logo.jpg" type="image/png">
      <meta name="viewpow" content="width=device-width">
      <meta charset="utf-8">
  </head>

  <body>
     <div class="content">








<section class="telo">

 <div class="vac"> Чек</div>



<dir class="text">


  
  

<?php












$surname = $_POST['surname'];
$name = $_POST['name'];
$karta = $_POST['karta'];
$polz = $_COOKIE['login'];

 print("<p class=\"text \"> Фамилия: " . $_POST['surname'] ."</p>");
 print("<p class=\"text \"> Имя: " . $_POST['name'] ."</p>");
 
 


$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");


$sql = "SELECT * FROM bilet,films,korzin  WHERE  films.idfilm=bilet.idfilm and idbilet=idbilets and korzin.polz='$polz' and prodan=2";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {


 $sum+= ($row['price']/100)*95;

    print("<div class=\"text \">
      <p > Название " . $row['namefilm'] .  "</p> 
      <p> Время <input class=\"databil\" type = \"text\" value=\"" . $row['Time'] .  "\" disabled> </p>



<p >Киносмотр

<input class=\"cenabil\"     type = \"text\"  value=\" ".$row['kinoteatrs']."\"  readonly  ></p>

<p>Ряд

<input class=\"cenabil\"     type = \"text\"  value=\" ".$row['reaad']."\"  readonly  >

Место

<input class=\"cenabil\"     type = \"text\"  value=\" ".$row['mesto']."\"  readonly  >

</p>

<p > Цена 
       
       <input class=\"cenabil\" type = \"text\" value=\"" . $row['price'] . "p\" disabled> 
       </p>


<p > Цена со скидкой
       
       <input class=\"cenabil\" type = \"text\" value=\"" . ($row['price']/100)*95 . "p\" disabled> 
       </p>


<br>
<hr size=\"2\" color=\"#000\"> </div>" );
  }


 print("<div class=\"text lef\">
<p> Всего <input class=\"cenabil\" type = \"text\" value=\"".$sum. "p\" disabled></p>

  <p>

</div>
");





  ?>
    
  </dir>


<form name="oko" method="POST" action="index.php" >

  <p class="aa">   <input type="submit" name="Ok" class="vxod"  value="Закрыть" ></p>
   </form>


<hr size="2" color="#000">






</section>









        
</div>
       

  </body>
</html>


