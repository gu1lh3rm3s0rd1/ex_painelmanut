<?php
//$servidor = "192.168.0.12";
//$database = "ORCL";
//$usuario ="P11PROD";
//$senha="P11PROD";

//$user = "P11PROD";
//$password = "P11PROD";
//$host = "192.168.0.12/orcl";
//$database = "ORCL";
//$port = "1521";

$conexao = oci_connect('P11PROD', 'P11PROD', '192.168.0.12/orcl');
if (!$conexao) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

?>

