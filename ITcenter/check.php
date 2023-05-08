<?php
$email = trim($_POST['login']);
$name = trim($_POST['name']);
$squad = trim($_POST['squad']);
$mamandyq = trim($_POST['mamandyq']);
$mysql = new mysqli('localhost','root','','submit');
$mysql->query("INSERT INTO `login` (`email`,`name`,`squad`,`mamandyq`)
VALUES ('$email','$name','$squad','$mamandyq')");
$mysql->close();
header('location: worldskillssubmit.php');
?>