<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpasswd = "dlit";
$dbcn = mysqli_connect($dblocation,$dbuser,$dbpasswd);
$q="CREATE DATABASE IF NOT EXISTS Дані_Користувача";
$y = mysqli_query($dbcn,$q);
mysqli_select_db($dbcn,"Дані_Користувача");
$q1 = "CREATE TABLE IF NOT EXISTS Форма(імя_користувача VARCHAR(30) NOT NULL PRIMARY KEY,
прізвище_користувача VARCHAR(30),
емейл_користувача VARCHAR(50) NOT NULL,
повідомлення_користувача VARCHAR(70)
)ENGINE=InnoDB CHARACTER SET cp1251";
$y1=mysqli_query($dbcn,$q1);
if(!empty($_POST))
{

$q2="INSERT INTO Форма VALUES('{$_POST['name1']}','{$_POST['surname1']}','{$_POST['email1']}','{$_POST['message1']}' )";
$y2 = mysqli_query($dbcn,$q2);
}
?>
