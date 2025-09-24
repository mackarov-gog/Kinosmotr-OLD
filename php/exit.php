<?php


if (isset($_POST['btnexit']))
{su();}

function su()
{

setcookie ("login", "", time() - (86400 * 30), "/");
setcookie ("name", "", time() - (86400 * 30), "/");

}

print("<script>document.location.href=\"../index.php\"</script>"); //index.php
?>