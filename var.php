<?php
$homeHeader = "Location: /mmxprint/home";
$siteName = "mmxprint";
$siteNameHeader = "Macromix Print";
$telefone = "3393-9145";

$home = "home.php";
$con = mysqli_connect("localhost", "root", null) or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con, "mmxprintdb") or die("Sem acesso ao DB");
?>