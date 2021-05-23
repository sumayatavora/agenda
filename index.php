<?php 
if(isset($_GET['invasao']) AND $_GET['invasao']=="tentou"){
	echo "<script language=\"JavaScript\" type=\"text/javascript\"> \n";
	echo "<!-- \n";
	echo "alert(\"\\tNão autorizado! \\n\\nUsuário e/ou senha incorretos\"); \n";
	echo "//--> \n";
	echo "</script> \n";
	
}
if(isset($_GET['invasao']) AND $_GET['invasao']=="url"){
	echo "<script language=\"JavaScript\" type=\"text/javascript\"> \n";
	echo "<!-- \n";
	echo "alert(\"\\t Área Restrita!!!! \\n\\nUsuário precisa ser autenticado\"); \n";
	echo "//--> \n";
	echo "</script> \n";
	
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" action="autentica.php">
  <table width="50%" class="tabela" align="center">
    <tr>
      <td style="text-align: right"><span class="centro">Usuario: </span></td>
      <td style="text-align: left"><span class="centro">
        <input type="text" name="login">
      </span></td>
    </tr>
    <tr>
      <td style="text-align: right"> Senha: </td>
      <td style="text-align: left">
        <input type="password" name="senha">
      </td>
    </tr>
    <tr>
      <td style="text-align: right">lembrar</td>
      <td style="text-align: left"><input type="checkbox" name="lembrar" id="lembrar">
      <label for="lembrar"></label></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center">
        <input type="submit" value="Login">
      </td>
    </tr>
  </table>
  <p></p>
  <p><BR>
  </p>
</form>
</body>
</html>


