<!DOCTYPE html>
<html>
  <head>
      <title>Киносмотр</title>
      <link href="../css/menu.css" rel="stylesheet" type="text/css">
     <link href="../css/teloanc0.css" rel="stylesheet" type="text/css">
       
      <link rel="shortcut icon" href="../images/logo.jpg" type="image/png">
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
<li><a href="../index.php">Главная</a></li>
<li><a href="../Films.php#1">Фильмы</a></li>
<li><a href="../Kinoteatry.php">Кинотеатры</a></li>
<li><a href="../Vacan.php">Вакансим</a></li>
<li><a href="../Action.php">Акции</a></li>
<li><a href="../Kont.php">Контакты</a></li>
<li><a href="../Add.php">Корзина</a></li>



<?php
if (isset($_COOKIE['login'])) 
    {print("<li class=\"noautoriz\"><a href=\"#exit\">Выйти</a></li> ");}
   else   {print("<li class=\"noautoriz\"><a href=\"../VxodReg.php\">Войти</a></li>");}
  ?>



</ul>
<!--/div-->
</nav>
</header>






      <header class="menuP">
            <nav>
            <ul>
                <li class="logo"><a href="../index.php">Киносмотр</a></li>

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
              <li class="kont">  <a href="../Add.php"> <img src="../images/add-to-cart.png" width="30px" alt="Корзина"> </a> </li>


                   
<?php
if (isset($_COOKIE['login'])) 
    {print("<li class=\"kont\">  <a href=\"#exit\" class=\"knopka\">Выйти</a>  </li>   <li class=\"kont\">  <a  class=\"knopka\">".$_COOKIE['name']."</a>  </li>   ");}
   else   {print("<li class=\"kont\">  <a href=\"VxodReg.php\" class=\"knopka\">Войти</a>  </li>");}
  ?>

                   
                <li  class="kont">  <img src="../images/download.png" width="30px" >  </li>

             </ul> 
             <ul  class="menum">

                     <li class="menu"><a href="../Films.php#1">Фильмы</a></li>
                     <li class="menu"><a href="../Kinoteatry.php">Кинотеатры</a></li>
                     <li class="menu"><a href="../Action.php">Акции</a></li>
            </ul>  
            </nav>


      </header>




<section class="telobig">



<div class="text">

 <p>Зеленая миля</p>
 
  <p class="poster" ><img src="../images/13.webp" width="140px" /></p>
  <div >
    
<p>Описание: </p>
  <div> Пол Эджкомб — начальник блока смертников в тюрьме «Холодная гора», каждый из узников которого однажды проходит «зеленую милю» по пути к месту казни. Пол повидал много заключённых и надзирателей за время работы. Однако гигант Джон Коффи, обвинённый в страшном преступлении, стал одним из самых необычных обитателей блока. </div>
<br>
</div>

<div class="traler">
<p>Трейлер: </p>
<iframe width="560" height="315" src="../trailer/Зеленая миля.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




<?php
if (isset($_COOKIE['login'])) 
    {print("<a class=\"button\" href=\"#openModal\" type=\"button\">В корзину</a> ");}

   else   {print("<p>Вы должны быть зарегистрированы, чтобы купить билеты</p>");}


  ?>



<?php


$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");

$sql = "SELECT * FROM `otziv`,polzov WHERE login=polz and  idfilm=17   ";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result))  {

print("<div class=\"otzivi\"> <p  class=\"nicname\"> ".$row['name']." ".$row['surname']."</p> 
  <p  class=\"nicname\"> ".$row['data']."  ".$row['time']."</p> 
 <p class=\"otzivtext\">".$row['otzivtext']."</p></div>");

}


?>


  

<?php
if (isset($_COOKIE['login'])) 
    {print("


<form name=\"formodz\" method=\"POST\" action=\"../php/otziv.php\">

<input type = \"number\" name=\"idfilma\" class=\"idfilma\" value=\"17\" >

  <textarea name=\"comment\" ></textarea>

  <input type = \"text\" name=\"ssilk\" class=\"idfilma\" value=\"films/Film13.php\" >

<input type=\"submit\" class=\"button\"  value=\"Добавить\" onclick=\"otprav();\" name=\"btnotz\">
</form>

      
       ");}

   else   {print("<p>Вы должны быть зарегистрированы, чтобы оставлять отзыв</p>");}


  ?>


























<div id="openModal" class="modalDialog">
  <div>

    <form name="formpoc" method="POST" action="../php/dobinkorz11.php">
    <a href="#close" title="Закрыть" class="close">X</a>
    <h2>Покупка</h2>
    
    <p>Время</p>
    <select        name = "vrem"   onchange="vib()">

                    <option value = "10:00" >10:00</option>
                  
                  <option value = "16:00" >16:00</option>
                  <option value = "22:00" >22:00</option>
                  
                </select>
<p>Кинотеатр</p>
    <select  name = "kinoteat"   onchange="vib()">

                    <option value = "1" >Киносмотр 1</option>
                    <option value = "2" >Киносмотр 2</option>
                </select>


<p>Цена за 1 билет</p>
<input type = "number" name="chenzaoas" value="100" readonly
><br>










 <a class="button" href="#openModal2" type="button">Далее</a>
     
 

  </div>
</div>









<div id="openModal2" class="modalDialog">
  <div>

   
    <a href="#close" title="Закрыть" class="close">X</a>
    <h2>Покупка</h2>
    
  
    






<input type = "number" name="idfilma" class="idfilma" value="17" >

<input type = "text" name="arrtext" class="idfilma"  >

<input type = "number" name="idbilet" class="idfilma" value="1" >


<?php





$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");


$sql = "SELECT * FROM bilet where  idfilm=17   ";
$result = mysqli_query($link, $sql);










while ($row = mysqli_fetch_array($result)) {



if (($row['reaad']==1)&& ($row['mesto']==1))
  print(" 

<section id=\"tc".$row['chast']."\">

  <table>
  
  <tr>
    <th></th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    
  </tr>
  
  ");

  if($row['mesto']==1) print(" <tr>  <td> " .$row['reaad']. "</td> ");
print(" 
  <td><input type=\"checkbox\" onclick=\"arrz(".$row['reaad'].",".$row['mesto'].");\"");

print("id=\"".$row['chast']."".$row['reaad']."".$row['mesto']."\"");


if ($row['prodan']!=0) print("disabled");
  print("></td>");

  
 if($row['mesto']==7) print(" </tr>"); 


if (($row['reaad']==5)&&  ($row['mesto']==7))
  print(" </table> </section>");

}








?>










<p>Количество</p>


<input type = "number" name="kolv"  min="1" max="120" value="1" readonly><br>

<p>Цена</p>
<input type = "number" name="chen"   value="1" readonly
><br>

 
     <input type="submit" class="vxod"  value="Добавить" onclick="otprav();" name="btnvac">
     
     <a  href="#openModal" type="button1" ><input type="button" class="closs"  value="Назад" title="Назад" ></a>
  </form>

  </div>
</div>

<style>

.nicname
{
 padding: 0 10px;
  margin: 0 10px;
  color: #fff;
}

.otzivtext
{
  background-color: #fff;
  margin: 20px 10px 10px;
   
    padding: 14px 28px; /* Поля */
    border-radius: 20px;
}

.otzivi
{
  background-color: #19072C;
   margin: 30px 0 10px;
    border: 2px solid ; /* Параметры рамки */
    padding: 10px 25px; /* Поля */
    border-radius: 20px;
}



textarea {
    margin: 30px 0px 10px;
    border: 2px solid ; /* Параметры рамки */
    padding: 10px; /* Поля */
    width: 94%; /* Ширина */
    height: 86px; /* Высота */
    font-size: 14px; /* Размер шрифта */
   }
textarea {
 resize: none;
}

  .modalDialog {
    position: fixed;
    
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    display: none;
    pointer-events: none;
  }

  .modalDialog:target {
    display: block;
    pointer-events: auto;
  }

  .modalDialog > div {
    width: 250px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    background: #fff;
   
  }

  .close {
    background: #000;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
  }

  .close:hover { background: #000; }

.idfilma
{display: none;}
  
  </style>



</div>





</section>





        
</div>
         <footer>
          <section class="Mob">

<div class="footer">

            <ul>
                     <li class="menufooterlogo"><a href="../index.php">Киносмотр</a></li><br>
                     <li class="menufooter"><a href="../Kinoteatry.php">Кинотеатры</a></li><br>
                     <li class="menufooter"><a href="../Action.php">Акции</a></li><br>
                     <li class="menufooter"><a href="../Kont.php">Контакты</a></li><br>
                     <li class="menufooter"><a href="../Vacan.php">Вакансии</a></li><br>
            

            <li class="menufooter"> <img src="../images/vk (1).png" width="30px"  onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="../images/instagram.png" width="30px"  onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="../images/telegram.png" width="30px" onclick="location.href='#'"/></li>
            <li class="menufooter"> <img src="../images/twitter.png" width="30px" onclick="location.href='#'"/></li>

                     <li class="podnaz"  >© 2020,  «Киносмотр»</li>


</ul>
</div>
 </section>               
                 
            </ul> 
          </section>





          <section class="Pk">
          <div class="footer">
         <ul>
                     <li class="menufooterlogo"><a href="../index.php">Киносмотр</a></li>
                     <li class="menufooter"><a href="../Kinoteatry.php">Кинотеатры</a></li>
                     <li class="menufooter"><a href="../Action.php">Акции</a></li>
                     <li class="menufooter"><a href="../Kont.php">Контакты</a></li>
                     <li class="menufooter"><a href="../Vacan.php">Вакансии</a></li>
            </ul>    
              <ul class="podbloc"> 

                     <li class="podscot">Cчетчик посещений:  <?php
$digits = 8;

$filelocation="../entercounter.txt";


$newfile = fopen($filelocation,"r");
$content = fread($newfile, filesize($filelocation));
fclose($newfile);
$newfile = fopen($filelocation,"w+");

fwrite($newfile, $content);
fclose($newfile);
echo "".sprintf ("%0"."$digits"."d",$content)."";
?> </li>
                     <li class="podnaz"  >© 2020,  «Киносмотр»</li>
<section class="ssilkna">
          
  <li class="pod"><a href="#" ><img src="../images/vk.png" onmouseover=" this.src='../images/vk1.png'" onmouseout="this.src='../images/vk.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="../images/instagram.png" onmouseover=" this.src='../images/instagram1.png'" onmouseout="this.src='../images/instagram.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="../images/telegram.png" onmouseover=" this.src='../images/telegram1.png'" onmouseout="this.src='../images/telegram.png'" width="30px"></img></a></li>

<li class="pod"><a href="#" ><img src="../images/twitter.png" onmouseover=" this.src='../images/twitter1.png'" onmouseout="this.src='../images/twitter.png'" width="30px"></img></a></li>
 </section>               
                 
            </ul>  
          </div>

      </section>
          </footer>


  </body>
</html>


<script >


  
//document.getElementById('tc1').style.display='none';
document.getElementById('tc2').style.display='none';
document.getElementById('tc3').style.display='none';
document.getElementById('tc4').style.display='none';
document.getElementById('tc5').style.display='none';
document.getElementById('tc6').style.display='none';


//для выбора билета
function vib()
{
document.getElementById('tc1').style.display='none';
document.getElementById('tc2').style.display='none';
document.getElementById('tc3').style.display='none';
document.getElementById('tc4').style.display='none';
document.getElementById('tc5').style.display='none';
document.getElementById('tc6').style.display='none';

if (formpoc.vrem.value=="10:00") 
{ formpoc.chenzaoas.value="100"}

if (formpoc.vrem.value=="16:00") 
{ formpoc.chenzaoas.value="160"}

if (formpoc.vrem.value=="22:00") 
{ formpoc.chenzaoas.value="200"}



if ((formpoc.vrem.value=="10:00") &&(formpoc.kinoteat.value==1))
{  formpoc.idbilet.value=1;
  document.getElementById('tc1').style.display='inline';
}
if ((formpoc.vrem.value=="10:00") &&(formpoc.kinoteat.value==2))
{  formpoc.idbilet.value=2;
document.getElementById('tc2').style.display='inline';
}
if ((formpoc.vrem.value=="16:00") &&(formpoc.kinoteat.value==1))
{  formpoc.idbilet.value=3;
document.getElementById('tc3').style.display='inline';
}
if ((formpoc.vrem.value=="16:00") &&(formpoc.kinoteat.value==2))
{  formpoc.idbilet.value=4;
document.getElementById('tc4').style.display='inline';
}
if ((formpoc.vrem.value=="22:00") &&(formpoc.kinoteat.value==1))
{  formpoc.idbilet.value=5;
document.getElementById('tc5').style.display='inline';
}
if ((formpoc.vrem.value=="22:00") &&(formpoc.kinoteat.value==2))
{  formpoc.idbilet.value=6;
document.getElementById('tc6').style.display='inline';
}



a=formpoc.chenzaoas.value;
b=formpoc.kolv.value;
c=a*b;
formpoc.chen.value=c;



arr =  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
formpoc.arrtext.value= arr;


kol=0;
formpoc.kolv.value=kol;
b=formpoc.kolv.value; c=a*b; formpoc.chen.value=c;

for (i=111;i<658;i++)
{
if (i%100==58){i+=53;}
if (i%10==8){i+=3;}
document.getElementById(i).checked=0;
}

//for (i=211;i<258;i++)
//{
//if (i%10==8){i+=3;}
//document.getElementById(i).checked=0;
//}



 }



kol=0; formpoc.kolv.value=kol;

var arr =  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];


formpoc.arrtext.value= arr;

a=formpoc.chenzaoas.value;
b=formpoc.kolv.value;
 c=a*b; 
 formpoc.chen.value=c;

function arrz(r,m)
{


if (r==1)
{
if(arr[m-1]==0)

{arr[m-1]=1;  formpoc.arrtext.value= arr; 
kol+=1; formpoc.kolv.value=kol; b=formpoc.kolv.value; c=a*b; formpoc.chen.value=c;
 }
else
{arr[m-1]=0;
formpoc.arrtext.value= arr;
kol-=1; formpoc.kolv.value=kol; b=formpoc.kolv.value; c=a*b; formpoc.chen.value=c;
}
}

else

{
if(arr[(m-1)+((r-1)*7)]==0)
{arr[(m-1)+((r-1)*7)]=1 ;  
  formpoc.arrtext.value= arr;
kol+=1; formpoc.kolv.value=kol; b=formpoc.kolv.value; c=a*b; formpoc.chen.value=c; }
else
{arr[(m-1)+((r-1)*7)]=0;
formpoc.arrtext.value= arr;
kol-=1; formpoc.kolv.value=kol; b=formpoc.kolv.value; c=a*b; formpoc.chen.value=c;
}
}
}



</script>




<div id="exit" class="modalDialog" >
  <div>
    <a href="#close" title="Закрыть" class="close">X</a>
    <p> </p>

    <form name="formexit" method="POST" action="../php/exit.php" >
   
<p class="aa"><p class="logo">Вы хотите выйти</p></p> 

    

   <p class="aa">

      <input type="submit" name="btnexit" class="vxod"  value="Да" title="да">
<a  href="#close" type="button1"><input type="button" class="closs" onClick="#openModal" value="нет" title="нет"></a>


  </p>
   
      

   </form>
  </div>
</div>
