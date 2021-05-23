<?php 
//restrição de acesso a página
session_start();
if(!$_SESSION['logado']||$_SESSION['logado']!=true){
	$vai = "index.php?invasao=url";
	header("location:".$vai);
}
#####################################
include_once'inc/conecta.php';
$sql = "select * from contatos"; //isso aqui e linguagem sql para pedir a tabela contatos
$consulta = mysqli_query($conn, $sql);

/*while($resposta = mysqli_fetch_assoc($consulta)) {
	var_dump($resposta);
}*/
$resposta = mysqli_fetch_all($consulta,MYSQLI_ASSOC);
//var_dump($resposta);
######################################
include 'inc/header.php';
include 'inc/menu.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="agenda">
  <table width="564" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td colspan="5"><p align="center">Agenda</p></td>
    </tr>
    <tr>
      <td width="92"><div align="center">Identificação</div></td>
      <td width="219"><div align="center">Nome</div></td>
      <td width="93"><div align="center">telefone</div></td>
      <td colspan="2"> <div align="center"><a href="inserir.php">Inserir</a></div></td>
    </tr>
<?php foreach($resposta as $key=>$linha):?>
    <tr>
      <td><div align="center"><?= $linha['id_cont']?></div></td>
      <td><?= $linha['nome']?> </td>
      <td><?= $linha['fone']?></td>
      <td width="69"><div align="center"><a href="alterar.php?id_cont=<?= $linha['id_cont']?>">alterar</a></div></td>
      <td width="69"><div align="center"><a href="excluir.php?id_cont=<?= $linha['id_cont']?>">excluir</a></div></td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<p align="center"></p>
<?php 
include 'inc/footer.php';
?>