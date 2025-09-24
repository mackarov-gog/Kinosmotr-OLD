<?php
//Скрипт для проверки зарегестрированного пользователя 
//пока из проверучной таблицы

if (isset($_POST['btnvxod']))
{su();}

function su()
{
// Переменные с формы
$loginvx = $_POST['loginvxod'];
$psaavx = $_POST['passvxod'];




if (($loginvx!="")&&($psaavx!=""))


{


$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");



$sql = "SELECT * FROM polzov WHERE login= '$loginvx' and pass= '$psaavx'";
$result = mysqli_query($link, $sql);

$row = mysqli_fetch_array($result);{

  if ( $row['login']  == "") {print("<script>document.location.href=\"../VxodReg.php\"</script>");} 


else {



    setcookie ("login", $loginvx, time() + (86400 * 30), "/");
    setcookie ("name", $row['name'], time() + (86400 * 30), "/");


	
print("<script>document.location.href=\"../index.php\"</script>");

}

}

}else {print("<script>document.location.href=\"../VxodReg.php\"</script>");}
}

?>