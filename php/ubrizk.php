<?php
$arr = $_POST['idf'];;
$polz = $_COOKIE['login'];



$link = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");
$sql1 = "UPDATE bilet SET prodan=0 WHERE idbilets = $arr  ";
$result = mysqli_query($link, $sql1);



$link2 = mysqli_connect("localhost", "b90525yp_prov", "MAKG55gog@","b90525yp_prov");
$sql2 = "DELETE FROM korzin WHERE polz='$polz' and idbilet=$arr ";
$result2 = mysqli_query($link2, $sql2);

if ($result2 == false) {
    print("Произошла ошибка при выполнении запроса");
}

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}


print("<script>document.location.href=\"../Add.php\"</script>");



?>