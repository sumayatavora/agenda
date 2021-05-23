<?php 
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['login'])&&isset($_POST['senha'])){
	include_once 'inc/conecta.php';
	extract($_POST);
	$sql="select * from usuarios where usuario ='$login'and senha ='$senha';";
	$consulta= mysqli_query($conn, $sql);
	$resposta = mysqli_num_rows($consulta);
	
	if ($resposta==1){
		
		session_start();
		$_SESSION['logado']=true;
		
		$vai = "gerenciar.php";
	}
	if($resposta == 0){
		$vai = "index.php?invasao=tentou";
	}
	header("location:".$vai);
}else{
	$vai = "index.php";
	header("location:".$vai);	
}
?>