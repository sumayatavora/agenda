<?php 
if($_SERVER['REQUEST_METHOD']=='GET'&& isset($_GET['id_cont'])){
	include_once 'inc/conecta.php';
	$sql="delete from contatos where id_cont='$_GET[id_cont]'";
	mysqli_query($conn, $sql);
}
mysqli_query($conn,$sql);
$vai = "gerenciar.php";
header("location:".$vai);
?>