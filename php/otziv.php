<?php

//Скрипт для занесения  вакансий в бд


if (isset($_POST['btnotz']))
{vacan();}

function vacan()
{
// Переменные с формы
$polz = $_COOKIE["login"];

$film = $_POST['idfilma'];

$otziv = $_POST['comment'];
//
$ssilk = $_POST['ssilk'];

$data = date("d.m.Y");


$h = date("H") ;



$tim = date("$h:i:s");




if (($polz !="" )&& ($film  !="" )&& ( $otziv !="" ))

{


$link1 = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");
$sql1 = "UPDATE otziv SET  otzivtext='$otziv',data = '$data',  time = '$tim' WHERE polz='$polz' and idfilm=$film ";
$result1 = mysqli_query($link1, $sql1);



$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");

 $sql = "INSERT INTO otziv (polz, idfilm, otzivtext,data,time) VALUES ('$polz','$film','$otziv','$data','$tim')";
$result = mysqli_query($link, $sql);


    

   


}

print("<script>document.location.href=\"../$ssilk\"</script>");

}
?>