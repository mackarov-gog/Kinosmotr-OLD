<?php

//Скрипт для занесения  вакансий в бд


if (isset($_POST['btnvac']))
{vacan();}

function vacan()
{
// Переменные с формы
$surnamevac = $_POST['surname'];
$namevac = $_POST['name'];
$agevac = $_POST['age'];
$mailvac = $_POST['maill'];
$citizenshipvac = $_POST['citizenship'];



if (($surnamevac !="" )&& ($namevac  !="" )&& ( $agevac >18)&& ( $agevac <100 )&& ( $mailvac !="" )&& ( $citizenshipvac  !="" ))

{


$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");



 $sql = "INSERT INTO vacans (surname, name, age, citizenship, email) VALUES ( '$surnamevac', '$namevac', '$agevac', '$citizenshipvac', '$mailvac')";
$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}

header('Location: ../Vacan.php');
exit();

}
else
{header('Location: ../Vacan.php');
exit();

}

}
?>