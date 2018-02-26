<?php

include("bancoDeDados.inc");

$user=isset($_post["user"])?$_post["user"]:"Usuario Invalido !!!";
$senha=isset($_post["senha"])?$_post["senha"]:"Senha Invalido !!!";
$email=isset($_post["email"])?$_post["email"]:"Email Invalido !!!";

$insert="insert into bd_cadastro (usuario,senha,email)value("$user","$senha","$email")";
mysqli_query($insert)die("erro no cadastro");

mysqli_close($con);


?>