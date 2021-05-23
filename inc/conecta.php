<?php
$host="localhost";
$user="root";
$pass="";
$bd="agenda";

$conn = mysqli_connect($host,$user,$pass,$bd);


if($conn->connect_errno){
	die("erro de conexao");
}
mysqli_set_charset($conn,'utf8');