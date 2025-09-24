<?php

if (isset($_POST['btnexit']))
{oplat();}

function oplat()
{$polz = $_COOKIE['login'];



$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");
$sql = "UPDATE bilet,korzin SET prodan=0 WHERE idbilet=idbilets and korzin.polz='$polz' and prodan=1";
$result = mysqli_query($link, $sql);


}
  ?>

<!DOCTYPE html>
<html>
  <head>
      <title>Киносмотр</title>
      <link href="css/menu.css" rel="stylesheet" type="text/css">
       
     <link href="css/teloanc2.css" rel="stylesheet" type="text/css">
         <script src="js/myscript.js"></script>
      <link rel="shortcut icon" href="images/logo.jpg" type="image/png">
      <meta name="viewpow" content="width=device-width">
      <meta charset="utf-8">
  </head>

  <body>
     <div class="content">






<header class="menuM">
<nav class="mobile-menu">
<label for="show-menu" class="show-menu"><span style="font-family:Ubuntu; font-size:1.6em; padding:5px; font-weight:bold;"><a href="../index.php" class="logoM">Киносмотр</a></span><div class="lines"></div></label>
<input type="checkbox" id="show-menu">
<!--div id="menu"-->
<ul id="menu" class="nav">
<li><a href="index.php">Главная</a></li>
<li><a href="Films.php#1">Фильмы</a></li>
<li><a href="Kinoteatry.php">Кинотеатры</a></li>
<li><a href="Vacan.php">Вакансим</a></li>
<li><a href="Action.php">Акции</a></li>
<li><a href="Kont.php">Контакты</a></li>
<li><a href="Add.php">Корзина</a></li>



<?php
if (isset($_COOKIE['login'])) 
    {print("<li class=\"noautoriz\"><a href=\"#exit\">Выйти</a></li> ");}
   else   {print("<li class=\"noautoriz\"><a href=\"VxodReg.php\">Войти</a></li>");}
  ?>



</ul>
<!--/div-->
</nav>
</header>






      <header class="menuP">
            <nav>
            <ul>
                <li class="logo"><a href="index.php">Киносмотр</a></li>
            

 <li class="kont">


  <?php
$polz = $_COOKIE['login'];
$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");


$sql = "SELECT COUNT(*) FROM bilet,films,korzin  WHERE  films.idfilm=bilet.idfilm and idbilet=idbilets and korzin.polz='$polz' and prodan=1";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
print($row['COUNT(*)']);

}
?></li>

  <li class="kont">  <a href="Add.php"> <img src="images/add-to-cart.png" width="30px" alt="Корзина"> </a> </li>


                   
<?php
if (isset($_COOKIE['login'])) 
    {print("<li class=\"kont\">  <a href=\"#exit\" class=\"knopka\">Выйти</a>  </li>   <li class=\"kont\">  <a  class=\"knopka\">".$_COOKIE['name']."</a>  </li>   ");}
   else   {print("<li class=\"kont\">  <a href=\"VxodReg.php\" class=\"knopka\">Войти</a>  </li>");}
  ?>

                   
                <li  class="kont">  <img src="images/download.png" width="30px" >  </li>

             </ul> 
             <ul  class="menum">

                     <li class="menu"><a href="Films.php#1">Фильмы</a></li>
                     <li class="menu"><a href="Kinoteatry.php">Кинотеатры</a></li>
                     <li class="menu"><a href="Action.php">Акции</a></li>
            </ul>  
            </nav>


      </header>




<section class="telo1">

 <div class="vac1 vac1plus"> Корзина</div>













<?php
$polz = $_COOKIE['login'];
$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");


$sql = "SELECT * FROM bilet,films,korzin  WHERE  films.idfilm=bilet.idfilm and idbilet=idbilets and korzin.polz='$polz' and prodan=1";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

      $sum+= $row['price'];      

    print("<div class=\"text \">


      <form  name=\"form7".$row['idbilet']. "\"  method=\"POST\" action=\"php/ubrizk.php\" >

      <input class=\"idf\" name=\"idf\"type = \"text\" value=\"".$row['idbilet']. "\" readonly>

      <p class=\"biletname\" > ".$row['namefilm']. "<input class=\"databil\" type = \"text\" value=\"".$row['Time']. "\" readonly></p> 
<p class=\"biletinf\">
    


       <input class=\"kinoreadmeato\"     type = \"text\"  value=\"Киносмотр ".$row['kinoteatrs']." Ряд ".$row['reaad']." Место " .$row['mesto']."\"  readonly  >

       

       <input class=\"cenabil\" type = \"text\" name=\"cen7".$row['idbilet']. "\" value=\"".$row['price']. "p\"  readonly> </p>
<p class=\"biletinf\">
       <input class=\"closs\" type=\"submit\"  value=\"Удалить\"/>
      
  <a href=\"../".$row['ccilk']."\" class=\"plus\">+</a>  

       </p>
</form>
</div>
<hr size=\"2\" color=\"#000\"> " );
  }

$sum2=($sum/100)*95;

print("<div class=\"text lef\">
  <form name=\"summa\">

<p> Всего <input class=\"cenabil\" type = \"text\" value=\"".$sum. "p\" disabled></p>



 
"); 


$sql = "SELECT COUNT(*) FROM bilet,films,korzin  WHERE  films.idfilm=bilet.idfilm and idbilet=idbilets and korzin.polz='$polz' and prodan=1";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

 if ($row['COUNT(*)']>0)
 {




print("

<p> Всего со скидкой <input class=\"cenabil\" type = \"text\" value=\"".$sum2. "p\" disabled> </p>

  <p><a  href=\"#openModal\" type=\"button1\"><input type=\"button\" class=\"vxod\" onClick=\"#openModal\" value=\"Купить\" ></a>

<a  href=\"#openud\" type=\"button1\"><input type=\"button\" class=\"closs\" onClick=\"#openud\" value=\"Удалить все\" ></a>
 
</p>

  </form>
</div>");


}

}

?>












</section>

        
</div>




<div id="openModal" class="modalDialog" >
  <div>
    <a href="#close" title="Закрыть" class="close">X</a>
    <h2>Оплата</h2>

    <form name="formoplat" method="POST" action="chec.php" >
   <input  type="text" name="surname"  placeholder="Фамилия" onKeyUp="if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1); }  oplatbil()"> 
   <input  type="text" name="name"  placeholder="Имя" onKeyUp="if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1); } oplatbil()"> 
<p>Карта</p> 
<input  type="text"  pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" placeholder="XXXX XXXX XXXX XXXX" name="cardcode1" onKeyUp=" oplatbil()" > 
    

     <input type="submit" name="submit" class="vxod"  value="Оплатить" disabled>
   </form>
  </div>
</div>




         <footer>
          <section class="Mob">

<div class="footer">

            <ul>
                     <li class="menufooterlogo"><a href="index.php">Киносмотр</a></li><br>
                     <li class="menufooter"><a href="Kinoteatry.php">Кинотеатры</a></li><br>
                     <li class="menufooter"><a href="Action.php">Акции</a></li><br>
                     <li class="menufooter"><a href="Kont.php">Контакты</a></li><br>
                     <li class="menufooter"><a href="Vacan.php">Вакансии</a></li><br>
            

            <li class="menufooter"> <img src="images/vk (1).png" width="30px"  onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="images/instagram.png" width="30px"  onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="images/telegram.png" width="30px" onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="images/twitter.png" width="30px" onclick="location.href='#'"/></li>

                     <li class="podnaz"  >© 2020,  «Киносмотр»</li>


</ul>
</div>
 </section>               
                 
            </ul> 
          </section>





          <section class="Pk">
          <div class="footer">
         <ul>
                     <li class="menufooterlogo"><a href="index.php">Киносмотр</a></li>
                     <li class="menufooter"><a href="Kinoteatry.php">Кинотеатры</a></li>
                     <li class="menufooter"><a href="Action.php">Акции</a></li>
                     <li class="menufooter"><a href="Kont.php">Контакты</a></li>
                     <li class="menufooter"><a href="Vacan.php">Вакансии</a></li>
            </ul>    
              <ul class="podbloc"> 

                     <li class="podscot">Cчетчик посещений: <?php
$digits = 8;

$filelocation="entercounter.txt";


$newfile = fopen($filelocation,"r");
$content = fread($newfile, filesize($filelocation));
fclose($newfile);
$newfile = fopen($filelocation,"w+");

fwrite($newfile, $content);
fclose($newfile);
echo "".sprintf ("%0"."$digits"."d",$content)."";
?></li>
                     <li class="podnaz"  >© 2020,  «Киносмотр»</li>
<section class="ssilkna">
          
  <li class="pod"><a href="#" ><img src="images/vk.png" onmouseover=" this.src='images/vk1.png'" onmouseout="this.src='images/vk.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="images/instagram.png" onmouseover=" this.src='images/instagram1.png'" onmouseout="this.src='images/instagram.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="images/telegram.png" onmouseover=" this.src='images/telegram1.png'" onmouseout="this.src='images/telegram.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="images/twitter.png" onmouseover=" this.src='images/twitter1.png'" onmouseout="this.src='images/twitter.png'" width="30px"></img></a></li>
 </section>               
                 
            </ul>  
          </div>

      </section>
          </footer>


  </body>
</html>




<script >
            var cc = formoplat.cardcode1;
for (var i in ['input', 'change', 'blur', 'keyup']) {
    cc.addEventListener('input', formatCardCode, false);

}



function formatCardCode() {
    var cardCode = this.value.replace(/[^\d]/g, '').substring(0,16);
    cardCode = cardCode != '' ? cardCode.match(/.{1,4}/g).join(' ') : '';
    this.value = cardCode;
}





        </script>

<div id="exit" class="modalDialog" >
  <div>
    <a href="#close" title="Закрыть" class="close">X</a>
    <p> </p>

    <form name="formexit" method="POST" action="php/exit.php" >
   
<p class="aa"><p class="logo">Вы хотите выйти</p></p> 

    

   <p class="aa">

      <input type="submit" name="btnexit" class="vxod"  value="Да" title="да">
<a  href="#close" type="button1"><input type="button" class="closs" onClick="#openModal" value="нет" title="нет"></a>


  </p>
   
      

   </form>
  </div>
</div>

<div id="openud" class="modalDialog" >
  <div>
    <a href="#close" title="Закрыть" class="close">X</a>
    <p> </p>

    <form name="formudvse" method="POST" action="Add.php" >
   
<p class="aa"><p class="logo">Вы точно хотите удалить</p></p> 

    

   <p class="aa">

      <input type="submit" name="btnexit" class="vxod"  value="Да" title="да">
<a  href="#close" type="button1"><input type="button" class="closs" onClick="#openModal" value="нет" title="нет"></a>


  </p>
   
      

   </form>
  </div>
</div>