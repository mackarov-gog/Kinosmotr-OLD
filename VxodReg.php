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




<section class="telo">

 <div class="vac1">
  <button class="button" onclick="document.getElementById('formP').style.display = 'none'; document.getElementById('formV').style.display = 'inline';" type="button">Войти</button>
  <button class="button" onclick="document.getElementById('formV').style.display = 'none'; document.getElementById('formP').style.display = 'inline';" type="button">Регистрация</button> </div>

<section id="formV">
<form name="formVx" method="POST" action="php/vxod.php">

<p class="cent">Вход</p>
<dir class="cent">
 <label><input  type="text" name="loginvxod"   placeholder="Логин" value="" onKeyUp="vxodpravc();" required  ></label><br>
 <label><input   type="password"  name="passvxod"  placeholder="Пароль" onKeyUp="vxodpravc();" required></label><br>


<input type="submit" class="vxod" name="btnvxod" value="Войти" onclick="vxodin();">


</dir>
</form>
</section>
<section id= "formP">                       
<form name= "formPeg" method="POST" action="php/reg.php" >
<section>
<p class="cent">Регистрация</p>
<dir class="cent">

  <label><input type="text" name="namerefistrat"  placeholder="Фамилия" onKeyUp="registratpravc();
    if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1);  }" required></label><br>


  <label><input type="text" name="surnamerefistrat" placeholder="Имя" onKeyUp="registratpravc(); 
    if(/[^a-zA-Zа-яА-ЯёЁ]/i.test(this.value)){ urlsite=''; urlsite = this.value;  this.value = urlsite.slice (0, -1);  }" required></label><br>


     
 <label><input type="text" name="loginregistrat" placeholder="Логин" onKeyUp="registratpravc();" required></label><br>
 <p class="errorpass" > *Логин занят, выберете другой</p>
 <label><input type="password" name="pass1" placeholder="Пароль" onKeyUp="registratpravc();" required></label><br>

  <label><input type="password" name="pass2" placeholder="Повторите пароль" onKeyUp="registratpravc();" required></label><br>
  <p class="errorpass" id="erpas"> *пароль не совпадает с веденным ранее</p>

   <input type="submit" class="vxod" name="btnr"  value="Выплнить" onclick="registrat();"><br>
  
  <input type="reset"  class="closs" onclick="clossregistrat();">

</dir>
</section>
</form>

</section>
        
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