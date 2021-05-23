<?php
 function 
 session_start();
if(!$_SESSION['logado']||$_SESSION['logado']==true){
	$vai = "index.php?invasao=url";
	header("location:".$vai);
}
