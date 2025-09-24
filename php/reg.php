



<?php


//Скрипт для регистрации пользователя в бд
//пока добавляет в проверучную таблицу

if (isset($_POST['btnr']))
{su();}

function su()
{
// Переменные с формы

$name = $_POST['namerefistrat'];
$surname = $_POST['surnamerefistrat'];
$login = $_POST['loginregistrat'];
$text = $_POST['pass1'];
$text1 = $_POST['pass2'];



//if ($text==$text1)
//{
//$link = mysqli_connect("localhost", "root", "","prov");




$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");



$sql = "SELECT login FROM proverc WHERE login= '$login'";
$result = mysqli_query($link, $sql);

$row = mysqli_fetch_array($result);

  if ( $row['login']  != "") { print("<script>document.location.href=\"../VxodReg.php\"</script>"); } else {



    






$temp = mysql_query("SELECT login FROM proverc WHERE login = '".$name ."'");




  
 


$sql = "INSERT INTO polzov (surname, name, login, pass ) VALUES ('$name','$surname','$login','$text')";





$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
}


print("<script>document.location.href=\"../VxodReg.php\"</script>");
}







?>