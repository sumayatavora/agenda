<?php 
//restrição de acesso a página

//conexao
include_once 'inc/conecta.php';
####################################################################
//executa a alteraçao com as informações do formulario
if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['alterar'])){
	extract($_POST);
	$sql="update contatos set nome='$nome',
							  fone='$fone',
							  email='$email',
							  sexo='$sexo',
							  tipo='$tipo'
					   where id_cont='$id_cont';	 			
			";
 mysqli_query($conn,$sql);
 $vai = "gerenciar.php";
 header("location:".$vai);
}
######################################################################
//executa a consulta do registro que será exibido no formulário
if ($_SERVER['REQUEST_METHOD']=='GET'&&isset($_GET['id_cont'])){
	$sql= "select * from contatos where id_cont='$_GET[id_cont]'";
	$consulta = mysqli_query($conn, $sql);
	$resposta= mysqli_fetch_assoc($consulta);
	//var_dump($resposta);
}
######################################################################
include 'inc/header.php';
include 'inc/menu.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#CCCCCC">
<div id="formulario">
  <form id="form1" name="form1" method="post" action="">
    <p>&nbsp;</p>
    <table width="494" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="242"><div align="right">Nome: </div></td>
        <td width="242"><input type="text" name="nome"  value="<?=$resposta['nome'] ?>"></td>
      </tr>
      <tr>
        <td><div align="right" >Telefone: </div></td>
        <td><input type="text" name="fone" value="<?=$resposta['fone'] ?>"></td>
      </tr>
      <tr>
        <td><div align="right">email: </div></td>
        <td><input type="text" name="email" value="<?=$resposta['email'] ?>"></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">sexo: </div></td>
        <td><p>
          <label>
            <input type="radio" name="sexo" value="m" id="sexo_0" <?=($resposta['sexo']=='m')?('checked'):(null)?>>
            Masculino</label>
          <br>
          <label>
            <input type="radio" name="sexo" value="f" id="sexo_1" <?=($resposta['sexo']=='f')?('checked'):(null)?>>
            Feminino</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td><div align="right">tipo: </div></td>
        <td><select name="tipo" id="tipo">
          <option value="par" <?=($resposta['tipo']=='par')?('selected'):(null)?>>Particular</option>
          <option value="esc"<?=($resposta['tipo']=='esc')?('selected'):(null)?>>Escola</option>
          <option value="fam"<?=($resposta['tipo']=='fam')?('selected'):(null)?>>Familia</option>
          <option value="tra"<?=($resposta['tipo']=='tra')?('selected'):(null)?>>Trabalho</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><input type="hidden" name="id_cont" id="id_cont" value="<?=$resposta['id_cont'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="alterar" type="submit" id="alterar" value="Alterar">
        </div></td>
      </tr>
    </table>
  </form>
</div>
<?php 
include 'inc/footer.php';
?>
