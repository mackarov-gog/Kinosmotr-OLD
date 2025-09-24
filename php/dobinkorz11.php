<?php



 $pizza  = $_POST['arrtext'];
$arr = explode(",", $pizza);
 





if (isset($_POST['btnvac']))
{vacan($arr);}

function vacan($arr)
{ 


	$polz = $_COOKIE['login'];
// Переменные с формы
$time = $_POST['vrem'];
$kinot = $_POST['kinoteat'];
$idfilma = $_POST['idfilma'];

//print($_POST['idfilma']);

$j=0;

$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");

$sql = "SELECT * FROM bilet WHERE  Time='$time' and idfilm= $idfilma  and kinoteatrs= $kinot  ";
$result1 = mysqli_query($link, $sql);


while ($rr = mysqli_fetch_array($result1)) {
 


if ((1==$arr[$j]) )
{

$aaa=$rr['idbilets'];



$sql1 = "UPDATE `bilet` SET `prodan`=1 WHERE idbilets = $aaa  ";
$result = mysqli_query($link, $sql1);

//if (isset($_COOKIE['login'])) 
//   	{echo "Логин: " . $_COOKIE["login"];}

$link2 = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");
$sql2 = "INSERT INTO korzin(polz, idbilet) VALUES ('$polz',$aaa)";
$result2 = mysqli_query($link2, $sql2);


if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
}
$j+=1;


}



print("<script>document.location.href=\"../Add.php\"</script>");






}










?>