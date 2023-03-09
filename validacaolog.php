
<?php
$usuario = $_POST['email'];
$senha = $_POST['pass'];


$table = array();
$table['admin@chiaperini.com.br'] = "devadmin@1";
$table['kall@chiaperini.com.br'] = "kall.ti@543788";
$table['sandro@chiaperini.com.br'] ="sandro.fin@241890" ;
$table['fernanda@chiaperini.com.br'] ="fernanda.vend@072147";
$table['danilo@chiaperini.com.br'] ="danilo.admin@851852";
$table['teo@chiaperini.com.br'] ="teo.fabric@432021";
$table['tadeu@chiaperini.com.br'] ="tadeu.admin@302062";

//$table['email'] = "kall@pc.br";
//$table['pass'] = "admindev";

if(array_key_exists($usuario,$table) && $table[$usuario] == $senha) {
    session_start();
    $_SESSION['email'] = $usuario;
    $_SESSION['pass'] = $senha;
    
    header("Location: painelcomercial.php");
    

}else
         
header("Location: login.html");



/*
if($usuario == $table['email'] && $senha == $table['pass']) {
session_start();
$_SESSION['email'] = $usuario;
$_SESSION['pass'] = $senha;
header("Location: painelcomercial.php");
}
else
header("Location: login.html");
*/


?>
