<!DOCTYPE html>
<html>
<head>
	<title>resultado</title>
</head>
<body>
<?php
include("bancoDeDados.inc");

$user=isset($_GET["user"])?$_GET["user"]:"Usuario Invalido !!!";
$senha=isset($_GET["senha"])?$_GET["senha"]:"Senha Invalido !!!";
$email=isset($_GET["email"])?$_GET["email"]:"Email Invalido !!!";

$inserir = mysqli_query($con,"insert into cadastro(usuario,senha,email)
	    value('$user','$senha','$email')");
	    if ($inserir) {
	    	echo "registro salvo com sucesso";
	    }
	    else{
	    	echo "registro nao pode ser registrado";
	    }
mysqli_close($con);
?>
<br>
<a href="paginaCadastro.php">VOLTAR</a>
</body>
</html>


