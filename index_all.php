
<?php 

require_once 'conexao.php';
//require_once 'inter2.php';
require_once 'inner.php';

?>

<?php 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Checa se o usuário fez login, senão, volta à pagina de login
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== 1){
header("Location: \login\index.php");   
}

//Checa se o usuário tem acesso ao painel desejado, senão volta à página de login
if ($_SESSION['only'] == 1 || $_SESSION['only'] == 2 || $_SESSION['only'] == 3 || $_SESSION['only'] == 4 || $_SESSION['only'] == 5 || $_SESSION['only'] == 6 || $_SESSION['only'] == 14){
	header("Location: \login\index.php");   
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php

    $data_atual = date('d/m'); 
    $dia = date('d');
    $mes = date('m');
    $dia = (int)$dia;
    $mes = (int)$mes;

    $data_menos1 = date('d/m', strtotime('-1 days')); $data_menos2 = date('d/m', strtotime('-2 days')); $data_menos3 = date('d/m', strtotime('-3 days')); $data_menos4 = date('d/m', strtotime('-4 days')); $data_menos5 = date('d/m', strtotime('-5 days')); $data_menos6 = date('d/m', strtotime('-6 days')); $data_menos7 = date('d/m', strtotime('-7 days')); $data_menos8 = date('d/m', strtotime('-8 days')); $data_menos9 = date('d/m', strtotime('-9 days')); $data_menos10 = date('d/m', strtotime('-11 days')); $data_menos11 = date('d/m', strtotime('-12 days')); $data_menos12 = date('d/m', strtotime('-13 days')); $data_menos13 = date('d/m', strtotime('-14 days')); $data_menos14 = date('d/m', strtotime('-15 days')); $data_menos15 = date('d/m', strtotime('-16 days')); $data_menos16 = date('d/m', strtotime('-17 days')); $data_menos17 = date('d/m', strtotime('-18 days')); $data_menos18 = date('d/m', strtotime('-19 days')); $data_menos19 = date('d/m', strtotime('-20 days')); $data_menos20 = date('d/m', strtotime('-20 days')); $data_menos21 = date('d/m', strtotime('-21 days')); $data_menos22 = date('d/m', strtotime('-22 days')); $data_menos23 = date('d/m', strtotime('-23 days')); $data_menos24 = date('d/m', strtotime('-24 days')); $data_menos25 = date('d/m', strtotime('-25 days')); $data_menos26 = date('d/m', strtotime('-26 days')); $data_menos27 = date('d/m', strtotime('-27 days'));
    $data_menoS28 = date('d/m', strtotime('-28 days')); $data_menos29 = date('d/m', strtotime('-29 days'));

  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="200; url=index3.php">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Front - Painel</title>
</head>

<body>
    <main class="backy">
  <br><br><br><br><br><br><br>
  
        <div class="inline transform">

            <div class="flex">

                <div class="blue-card">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> VENDA NO DIA</strong></label>
                    <br> <br>
                    <label class="white font-30 center"><?php 
include 'vendadia.php';
    //echo number_format(str_replace(',','.', $c),2,',','.');    
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; 
    
       if ($c == null or ""){
     echo "";
   }else{
    echo number_format(str_replace(',','.', $c),2,',','.');    
  }
     ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
</h1>   
</label>
</div>
                <div class="blue-card blue-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> VENDA NO MÊS</strong></label>
                    <br><br>
                    <label class="white font-30 center"> <?php 
include 'vendames.php';
    //echo number_format(str_replace(',','.', $a),2,',','.'); 
    if ($a == null or ""){
      echo "0";
    }else{
     echo number_format(str_replace(',','.', $a),2,',','.');    
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>

<?php //echo 'R$'.number_format(str_replace(',','.', $a),2,',','.'); ?>

                </div>

                <div class="blue-card blue-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> VENDA NO ANO</strong></label>
                    <br><br>
                    <label class="white font-30 center"><?php 
include 'vendaano.php';
    //echo number_format(str_replace(',','.', $e),2,',','.');
    if ($e == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $e),2,',','.');    
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $e),2,',','.'); ?>
                </div>

                <div class="blue-card">
                    <label class="white font-10"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> MÉDIA VENDA DIÁRIA</strong></label>
                    <br><br>
                    <label class="white font-30 center"><?php 
include 'mvendadia.php';
    $mvd = str_replace(",",".", $mvd);//formatacao ex: 12345,67 para 12345.67
    //echo number_format(str_replace(',','.', $mvd),2,',','.');
    if ($mvd == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $mvd),2,',','.');    
   }
// echo'R$'.number_format(str_replace(',','.', $mv),2,',','.');
?></label>
                </div>

            </div>

            <div class="divider-cards"></div>
            
            <div class="flex">

                <div class="red-card">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> FATURAMENTO NO DIA</strong></label>
                    <br><br>
                    <label class="white font-30 center"><?php 

   include 'faturadia.php';
   //echo number_format(str_replace(',','.', $d),2,',','.');
   if ($d == null or ""){
    echo "";
  }else{
   echo number_format(str_replace(',','.', $d),2,',','.');    
 }
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $d),2,',','.'); ?>
</label>
                </div>

                <div class="red-card red-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> FATURAMENTO NO MÊS</strong></label>
                      <br><br>
                    <label class="white font-30 center"><?php 
include 'faturames.php';
    //echo number_format(str_replace(',','.', $b),2,',','.');
    if ($b == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $b),2,',','.'); 
    }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $b),2,',','.'); ?>
</label>
                </div>

                <div class="red-card red-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> FATURAMENTO NO ANO</strong></label>
                      <br><br>
                    <label class="white font-30 center"><?php 
include 'faturaano.php';
     //echo number_format(str_replace(',','.', $f),2,',','.');
     if ($f == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $f),2,',','.'); 
    }
     //$b = $dados['F4_FINALID'];
     //$c = $dados ['F4_CODIGO']; ?>
 <?php //echo 'R$'.number_format(str_replace(',','.', $f),2,',','.'); ?>
</label>
                </div>

                <div class="red-card">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> MÉDIA DE FATURAMENTO DIÁRIO</strong></label>
                      <br>
                    <label class="white font-30 center"> <?php 
include 'mfaturadia.php';
    $mf = str_replace(",",".", $mf);//formatacao ex: 12345,67 para 12345.67
    //echo number_format(str_replace(',','.', $mfd),2,',','.');
    if ($mf == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $mf),2,',','.'); 
    }
 //echo'R$'.number_format(str_replace(',','.', $mfd),2,',','.');
?>
</label>
</div>
</div>

            <div class="flex">
<div class="yellow-card">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS BLQ FINANCEIRO</strong></label>
      <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedidobloqestoquefinan.php';

if ($pedbloqestfinan == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedbloqestfinan),2,',','.'); 
}
    //echo number_format(str_replace(',','.', $pedbloqestfinan),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedbloqestfinan),2,',','.'); ?>
</label>
</div>

<div class="yellow-card yellow-margin">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS LIBERADOS</strong></label>
    <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedidoliberado.php';

if ($pedlib == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedlib),2,',','.'); 
}
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedlib),2,',','.'); ?>
</label>
</div>

<div class="yellow-card yellow-margin">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS BQL ESTOQUE</strong></label>
    <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedidobloqestoque.php';
if ($pedbloqest == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedbloqest),2,',','.'); 
}  
//echo number_format(str_replace(',','.', $pedbloqest),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedbloqest),2,',','.'); ?>
</label>
</div>

<div class="yellow-card yellow-margin">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS MANUTENÇÃO</strong></label>
    <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedmanut.php';

if ($pedmanut == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedmanut),2,',','.'); 
}
    //echo number_format(str_replace(',','.', $pedmanut),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedmanut),2,',','.'); ?>

</label>
</div>

<div class="yellow-card">
  <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </svg> CARTEIRA PEDIDOS TOTAL</strong></label>
  <br><br>
  <label class="white font-30 center"> <?php 
include 'cartpedidototal.php';
if ($pedtl == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedtl),2,',','.'); 
}
//    echo number_format(str_replace(',','.', $pedtl),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedtl),2,',','.'); ?>
</label>
</div>
</div>
</div>
    </main>
</body>
</html>